<?php return array (
  '12ffdb59add4fd179a0a6921d4b1727c' => 
  array (
    'criteria' => 
    array (
      'name' => 'redactor',
    ),
    'object' => 
    array (
      'name' => 'redactor',
      'path' => '{core_path}components/redactor/',
      'assets_path' => '{assets_path}components/redactor/',
    ),
  ),
  '2ce1158c51e000d37f32f9e8df48585c' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.css',
    ),
    'object' => 
    array (
      'key' => 'redactor.css',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e2074c2d399509ae4d2110a702c14e8d' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.sanitizePattern',
    ),
    'object' => 
    array (
      'key' => 'redactor.sanitizePattern',
      'value' => '/([[:alnum:]_\\.-]*)/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '53bd808089aa6786534bce3bb51b07e6' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.sanitizeReplace',
    ),
    'object' => 
    array (
      'key' => 'redactor.sanitizeReplace',
      'value' => '_',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '075fdfce853cf7a0e5bb20d050b45f93' => 
  array (
    'criteria' => 
    array (
      'name' => 'Redactor',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Redactor',
      'description' => 'Redactor WYSIWYG editor plugin for MODX Revolution',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * Redactor WYSIWYG Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnRichTextBrowserInit, OnDocFormPrerender
 *
 * @author JP DeVries <mail@devries.jp>
 *
 * @package redactor
 */

$corePath = $modx->getOption(\'redactor.core_path\', null, $modx->getOption(\'core_path\').\'components/redactor/\');

switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tvs/input/\');
        break;

    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tvs/inputoptions/\'); 
        break;

    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tvs/properties/\');
        break;
        
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tvs/output/\');
        break;

    case \'OnManagerPageBeforeRender\':
        break;

    case \'OnRichTextEditorRegister\':
        $modx->event->output(\'Redactor\');
        break;

    case \'OnFileManagerFileRename\':
        /**
         * @var string $path
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }
        $redactor->renames[] = $path;

        break;

    case \'OnRichTextEditorInit\':
        /**
         * @var string $editor
         * @var array $elements
         *
         * Only load up the editor if the editor is Redactor, and use_editor is enabled.
         */
        $rte = isset($editor) ? $editor : $modx->getOption(\'which_editor\', null, \'\');
        if ($rte !== \'Redactor\' || !$modx->getOption(\'use_editor\', null, true)) {
            return;
        }

        /**
         * Attempt to load the Redactor service class. Log error and halt processing if it fails.
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }

        if (isset($resource) && $resource instanceof modResource) {
            $redactor->setResource($resource);
        }
        elseif ($modx->resource) {
            $redactor->setResource($modx->resource);
        }
        elseif ($modx->controller && isset($modx->controller->resource) && $modx->controller->resource instanceof modResource) {
            $redactor->setResource($modx->controller->resource);
        }

        $customCss = $redactor->getOption(\'redactor.css\');

        if ($modx->controller && !($modx->controller instanceof modManagerControllerDeprecated)) {
            $modx->controller->addLexiconTopic(\'redactor:default\');
            $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'redactor-2.3.7.min.css\');
            if ($redactor->degradeUI) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if ($redactor->rebeccaDay) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if ($customCss) $modx->controller->addCss($customCss);
        }
        else {
            $modx->lexicon->load(\'redactor:default\');
            $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'redactor-2.3.7.min.css\');
            if($redactor->degradeUI) $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if($redactor->rebeccaDay) $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if($customCss) $modx->regClientCSS($customCss);
        }

        $html = $redactor->getHtml();
        $modx->event->output($html);
        break;
}

return;',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Redactor WYSIWYG Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnRichTextBrowserInit, OnDocFormPrerender
 *
 * @author JP DeVries <mail@devries.jp>
 *
 * @package redactor
 */

$corePath = $modx->getOption(\'redactor.core_path\', null, $modx->getOption(\'core_path\').\'components/redactor/\');

switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tvs/input/\');
        break;

    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tvs/inputoptions/\'); 
        break;

    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tvs/properties/\');
        break;
        
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tvs/output/\');
        break;

    case \'OnManagerPageBeforeRender\':
        break;

    case \'OnRichTextEditorRegister\':
        $modx->event->output(\'Redactor\');
        break;

    case \'OnFileManagerFileRename\':
        /**
         * @var string $path
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }
        $redactor->renames[] = $path;

        break;

    case \'OnRichTextEditorInit\':
        /**
         * @var string $editor
         * @var array $elements
         *
         * Only load up the editor if the editor is Redactor, and use_editor is enabled.
         */
        $rte = isset($editor) ? $editor : $modx->getOption(\'which_editor\', null, \'\');
        if ($rte !== \'Redactor\' || !$modx->getOption(\'use_editor\', null, true)) {
            return;
        }

        /**
         * Attempt to load the Redactor service class. Log error and halt processing if it fails.
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }

        if (isset($resource) && $resource instanceof modResource) {
            $redactor->setResource($resource);
        }
        elseif ($modx->resource) {
            $redactor->setResource($modx->resource);
        }
        elseif ($modx->controller && isset($modx->controller->resource) && $modx->controller->resource instanceof modResource) {
            $redactor->setResource($modx->controller->resource);
        }

        $customCss = $redactor->getOption(\'redactor.css\');

        if ($modx->controller && !($modx->controller instanceof modManagerControllerDeprecated)) {
            $modx->controller->addLexiconTopic(\'redactor:default\');
            $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'redactor-2.3.7.min.css\');
            if ($redactor->degradeUI) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if ($redactor->rebeccaDay) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if ($customCss) $modx->controller->addCss($customCss);
        }
        else {
            $modx->lexicon->load(\'redactor:default\');
            $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'redactor-2.3.7.min.css\');
            if($redactor->degradeUI) $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if($redactor->rebeccaDay) $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if($customCss) $modx->regClientCSS($customCss);
        }

        $html = $redactor->getHtml();
        $modx->event->output($html);
        break;
}

return;',
    ),
  ),
  'd7af59b0f7267bfc6c5eb01bc06a972c' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorRegister',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorRegister',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '4f6f0ce142eda3c991baa91afe8a6478' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '8b6df0ea9d707ebb8a5f858f3e4538c5' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '025bc51e3002a11e2903874a9078b888' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorInit',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorInit',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '31d17e6896fbcdc1c4efd39db02414f8' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnFileManagerFileRename',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnFileManagerFileRename',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);