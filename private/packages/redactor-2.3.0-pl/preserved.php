<?php return array (
  'c3762ffb124a4c5db23fda753a78771b' => 
  array (
    'criteria' => 
    array (
      'name' => 'redactor',
    ),
    'object' => 
    array (
      'name' => 'redactor',
      'path' => '{core_path}components/redactor/',
      'assets_path' => '',
    ),
  ),
  '2311f2320b73947e1b1cf7141a4a9d9a' => 
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
            $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'redactor-2.2.2.min.css\');
            if ($redactor->degradeUI) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if ($redactor->rebeccaDay) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if ($customCss) $modx->controller->addCss($customCss);
        }
        else {
            $modx->lexicon->load(\'redactor:default\');
            $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'redactor-2.2.2.min.css\');
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
            $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'redactor-2.2.2.min.css\');
            if ($redactor->degradeUI) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if ($redactor->rebeccaDay) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if ($customCss) $modx->controller->addCss($customCss);
        }
        else {
            $modx->lexicon->load(\'redactor:default\');
            $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'redactor-2.2.2.min.css\');
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
  'c5a16150aa47b113e81787851f81d114' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextBrowserInit',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextBrowserInit',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '67e82d64db6f601d5a9367c52631da27' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnManagerPageBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnManagerPageBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '0f4fcec3636bc76a6f460be176801283' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnDocFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnDocFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'bc43078aad7749201a2c7c36888a0601' => 
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
  'dea37131e296b020cc5f1d9538a8b9ef' => 
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
  '99aaa5a4b6c0ee92ba94093ce79e3716' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVOutputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVOutputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '2377cd3a91c61fbb546eb03c1574d95c' => 
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
  '7d50ee6ad5793649441b120a82ce7e69' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVOutputRenderPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVOutputRenderPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '05fe518235bb07d8e841430e9ae8cd40' => 
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
  '8d1c43f97147a83824e87c2f6e764abe' => 
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
  'b2bc1d666e2dc9f59e25365a6b3a7b86' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.lang',
    ),
    'object' => 
    array (
      'key' => 'redactor.lang',
      'value' => 'de',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Internationalisation',
      'editedon' => '2016-04-22 18:20:42',
    ),
  ),
  '53b42b990cad69e03a9985e80f9a539d' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.direction',
    ),
    'object' => 
    array (
      'key' => 'redactor.direction',
      'value' => 'ltr',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Internationalisation',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '273de4fe08bd22aed9de187b8ae989fd' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.buttons',
    ),
    'object' => 
    array (
      'key' => 'redactor.buttons',
      'value' => 'html,|,formatting,|,bold,italic,|,unorderedlist,orderedlist,outdent,indent,|,image,file,table,link,|,alignment',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '2016-05-26 13:54:18',
    ),
  ),
  '699a7568b8c7dbe9daed3e70e606153a' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.activeButtons',
    ),
    'object' => 
    array (
      'key' => 'redactor.activeButtons',
      'value' => 'deleted,italic,bold,underline,unorderedlist,orderedlist,alignleft,aligncenter,alignright,justify',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b2a51b9f65a94986c1adcd78460996dc' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.activeButtonsStates',
    ),
    'object' => 
    array (
      'key' => 'redactor.activeButtonsStates',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '199d52df94d92b8bd53fc56a315d82b9' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.formattingTags',
    ),
    'object' => 
    array (
      'key' => 'redactor.formattingTags',
      'value' => 'p,h1,h2,h3,h4',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '2016-05-26 13:50:34',
    ),
  ),
  '87deb12f5249a944f1b873762c883a12' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.buttonSource',
    ),
    'object' => 
    array (
      'key' => 'redactor.buttonSource',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'bca88707c4d87f3915141c9977718ecb' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.buttonFullScreen',
    ),
    'object' => 
    array (
      'key' => 'redactor.buttonFullScreen',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4577baa9db53398394735b9c6fc73354' => 
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
  'a9c4c57a96f8598e7f63831678a1beeb' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.shortcuts',
    ),
    'object' => 
    array (
      'key' => 'redactor.shortcuts',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '42aee2068267bb3c459f072c0d2b6214' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.cleanup',
    ),
    'object' => 
    array (
      'key' => 'redactor.cleanup',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '38426a30ab664d0a9b28ab32e8d0aa2f' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.convertLinks',
    ),
    'object' => 
    array (
      'key' => 'redactor.convertLinks',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '7fe31b2dccea03bdcf95bde093e33bed' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.tabindex',
    ),
    'object' => 
    array (
      'key' => 'redactor.tabindex',
      'value' => '0',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '53d15adc521c89fd602b0404dc171148' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.minHeight',
    ),
    'object' => 
    array (
      'key' => 'redactor.minHeight',
      'value' => '200',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e88cc294f03043c831b1314eae3079ad' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.colors',
    ),
    'object' => 
    array (
      'key' => 'redactor.colors',
      'value' => '#ffffff,#000000,#eeece1,#1f497d,#4f81bd,#c0504d,#9bbb59,#8064a2,#4bacc6,#f79646,#ffff00,#f2f2f2,#7f7f7f,#ddd9c3,#c6d9f0,#dbe5f1,#f2dcdb,#ebf1dd,#e5e0ec,#dbeef3,#fdeada,#fff2ca,#d8d8d8,#595959,#c4bd97,#8db3e2,#b8cce4,#e5b9b7,#d7e3bc,#ccc1d9,#b7dde8,#fbd5b5,#ffe694,#bfbfbf,#3f3f3f,#938953,#548dd4,#95b3d7,#d99694,#c3d69b,#b2a2c7,#b7dde8,#fac08f,#f2c314,#a5a5a5,#262626,#494429,#17365d,#366092,#953734,#76923c,#5f497a,#92cddc,#e36c09,#c09100,#7f7f7f,#0c0c0c,#1d1b10,#0f243e,#244061,#632423,#4f6128,#3f3151,#31859b,#974806,#7f6000',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'db90a4a7627cbc3d28a67372bd4ccfdf' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.wym',
    ),
    'object' => 
    array (
      'key' => 'redactor.wym',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'be0dad5f6c65b896bf6b7e0a9f91d95c' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkProtocol',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkProtocol',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '224d5f0e2ec6712fc3586a23662c4ce7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.placeholder',
    ),
    'object' => 
    array (
      'key' => 'redactor.placeholder',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a877edbd0554ff96dda2ba3b4445831b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linebreaks',
    ),
    'object' => 
    array (
      'key' => 'redactor.linebreaks',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fb03201f454461c20f6b5b8cd30d7695' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.allowedTags',
    ),
    'object' => 
    array (
      'key' => 'redactor.allowedTags',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4647d23d93d642042822c6a2a4f2fe2a' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.deniedTags',
    ),
    'object' => 
    array (
      'key' => 'redactor.deniedTags',
      'value' => 'html,head,link,body,meta,script,style,applet',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a8dd6903d6a2544c982ee9e58b0be0f5' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkEmail',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkEmail',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ffe0f5393e64be1fd6b4081b8e97a0d7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkAnchor',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkAnchor',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '875e42e83498297e151a6702569a095c' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.pastePlainText',
    ),
    'object' => 
    array (
      'key' => 'redactor.pastePlainText',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '99849967315e459e3c6f9e321187fef5' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.paragraphize',
    ),
    'object' => 
    array (
      'key' => 'redactor.paragraphize',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8ca520d641a17e7be336d1949a7bfc0c' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.removeComments',
    ),
    'object' => 
    array (
      'key' => 'redactor.removeComments',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '729f26d7e2b9620dabbc08931f8d6b3b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.visual',
    ),
    'object' => 
    array (
      'key' => 'redactor.visual',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'da0b1bb30d024396b9210629c841a428' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.marginFloatLeft',
    ),
    'object' => 
    array (
      'key' => 'redactor.marginFloatLeft',
      'value' => '0 10px 10px 0',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e4466784558806543f9db64b7e0588ca' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.marginFloatRight',
    ),
    'object' => 
    array (
      'key' => 'redactor.marginFloatRight',
      'value' => '0 0 10px 10px',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '500817695b8c7ceeb890b47f8648ab17' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.mediasource',
    ),
    'object' => 
    array (
      'key' => 'redactor.mediasource',
      'value' => '2',
      'xtype' => 'modx-combo-source',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:23:19',
    ),
  ),
  'b6bdf71c43f126dd09de79eaed908e64' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.file_mediasource',
    ),
    'object' => 
    array (
      'key' => 'redactor.file_mediasource',
      'value' => '2',
      'xtype' => 'modx-combo-source',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:22:46',
    ),
  ),
  '7664e07eb112e76c01e42f8d31a728fe' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.image_upload_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.image_upload_path',
      'value' => 'bilder/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:23:06',
    ),
  ),
  'e4f484ffe6d250abbe1ec71b26c91e92' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.image_browse_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.image_browse_path',
      'value' => 'bilder/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:23:02',
    ),
  ),
  'cff0d5f9fc9cdb4d39b1b9c99d252c9c' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.file_upload_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.file_upload_path',
      'value' => 'dateien/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:22:56',
    ),
  ),
  'f497aab7edfa82f7f9d47ac76f467e8a' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.file_browse_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.file_browse_path',
      'value' => 'dateien/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:22:52',
    ),
  ),
  '49df79d591b71f6a1c0a65674ca0791c' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.browse_files',
    ),
    'object' => 
    array (
      'key' => 'redactor.browse_files',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '42d4759c73aa8f0bddf6d4fc8ea922c5' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.date_images',
    ),
    'object' => 
    array (
      'key' => 'redactor.date_images',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '68d8ca3d113a37a06cebf6614d3a9146' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.date_files',
    ),
    'object' => 
    array (
      'key' => 'redactor.date_files',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd0fe43deb9f346fbb6e5ebfcb5d9ee15' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.typeahead.include_introtext',
    ),
    'object' => 
    array (
      'key' => 'redactor.typeahead.include_introtext',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Resource Typeahead',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b6c3ead706c1b324abe612fb425ab468' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.prefetch_ttl',
    ),
    'object' => 
    array (
      'key' => 'redactor.prefetch_ttl',
      'value' => '3600000',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Resource Typeahead',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '53da83f2679132ec32b626df72b7afea' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkResource',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkResource',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '49c4dd942888122da96922d769fb826d' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.cleanFileNames',
    ),
    'object' => 
    array (
      'key' => 'redactor.cleanFileNames',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'be5396f527b0b127f4cc9ed33f6a6d8d' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.dynamicThumbs',
    ),
    'object' => 
    array (
      'key' => 'redactor.dynamicThumbs',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'bd9901c2de2f78a0ffd5ed197dada9d4' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.clipsJson',
    ),
    'object' => 
    array (
      'key' => 'redactor.clipsJson',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'edfcee9818f0544180e7a10521a68eb6' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.additionalPlugins',
    ),
    'object' => 
    array (
      'key' => 'redactor.additionalPlugins',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b5f6675a7698de60eab6998043840eda' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.dragUpload',
    ),
    'object' => 
    array (
      'key' => 'redactor.dragUpload',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '66ac8da9a215494fc81c92255a773fcb' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.convertImageLinks',
    ),
    'object' => 
    array (
      'key' => 'redactor.convertImageLinks',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '7fb74d56f9fc720ae80b258d999ed066' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.convertVideoLinks',
    ),
    'object' => 
    array (
      'key' => 'redactor.convertVideoLinks',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '96070e012d41b7e15c355d3a4b6bb180' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.tabAsSpaces',
    ),
    'object' => 
    array (
      'key' => 'redactor.tabAsSpaces',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0858641fcb866a990a190fb8ac9c0b88' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.removeEmptyTags',
    ),
    'object' => 
    array (
      'key' => 'redactor.removeEmptyTags',
      'value' => 'p',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fdd96ae8849d0c0c548a8bbf2a88feb2' => 
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
  'f9b2f14cf93698918075023c0fd8f9b9' => 
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
  '091632b354f7fdcdb0839d0c11ba6417' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkSize',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkSize',
      'value' => '50',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0e4a29d9c8b36fc616918044d237f186' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.advAttrib',
    ),
    'object' => 
    array (
      'key' => 'redactor.advAttrib',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '962d89b01c844295abcb631995434768' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkNofollow',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkNofollow',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '57fedce8243af805c3313c921f8432b5' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.typewriter',
    ),
    'object' => 
    array (
      'key' => 'redactor.typewriter',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '53649830b8e9f16525b8b19542096192' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.buttonsHideOnMobile',
    ),
    'object' => 
    array (
      'key' => 'redactor.buttonsHideOnMobile',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ff90cc61af05f4751878f861b7ba341b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.toolbarOverflow',
    ),
    'object' => 
    array (
      'key' => 'redactor.toolbarOverflow',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '948f34025bafcd6bd7f8efefc726ed18' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.cleanSpaces',
    ),
    'object' => 
    array (
      'key' => 'redactor.cleanSpaces',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ea952860a0d41d71c6f1334fa931fbe7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.predefinedLinks',
    ),
    'object' => 
    array (
      'key' => 'redactor.predefinedLinks',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '6e2cfcb7989ba31b663e0762292312cb' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.shortcutsAdd',
    ),
    'object' => 
    array (
      'key' => 'redactor.shortcutsAdd',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f4cf4a55dcef38f5efa3b4c9c99d1b9b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.commemorateRebecca',
    ),
    'object' => 
    array (
      'key' => 'redactor.commemorateRebecca',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '39be1ae3f61c43babe8cc080d2ca71d9' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.toolbarFixed',
    ),
    'object' => 
    array (
      'key' => 'redactor.toolbarFixed',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3fbbb00ab2ec5ad22183d5da50dc6010' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.focus',
    ),
    'object' => 
    array (
      'key' => 'redactor.focus',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e5a189317f670ea11b47a1c932416a6f' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.focusEnd',
    ),
    'object' => 
    array (
      'key' => 'redactor.focusEnd',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '63f9658db2a400696009d9ed297f0a9b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.scrollTarget',
    ),
    'object' => 
    array (
      'key' => 'redactor.scrollTarget',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a0c05c8688fe3d31ba12410771622032' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.enterKey',
    ),
    'object' => 
    array (
      'key' => 'redactor.enterKey',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0952c4c1f08a52d3e377fcaee9a57eaa' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.cleanStyleOnEnter',
    ),
    'object' => 
    array (
      'key' => 'redactor.cleanStyleOnEnter',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e75c8c0bcebf244a35c48fd62831d203' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkTooltip',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkTooltip',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b617748dd60d9842a59d629741910d4b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.imageEditable',
    ),
    'object' => 
    array (
      'key' => 'redactor.imageEditable',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '31f2b2556468bfade852b59dbd6608d3' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.imageResizable',
    ),
    'object' => 
    array (
      'key' => 'redactor.imageResizable',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a4660bb400ef96f733488bb89cfca0ca' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.imageLink',
    ),
    'object' => 
    array (
      'key' => 'redactor.imageLink',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '806596f0717c3c1827e2a3d77e51ae56' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.imagePosition',
    ),
    'object' => 
    array (
      'key' => 'redactor.imagePosition',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3e401eefd7d3853fcf41db17011aee64' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.buttonsHide',
    ),
    'object' => 
    array (
      'key' => 'redactor.buttonsHide',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '74b66f2158719f76e8e7df11cb301625' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.formattingAdd',
    ),
    'object' => 
    array (
      'key' => 'redactor.formattingAdd',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '331bf3a23867c7cdc5dffa63ab913589' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.tabifier',
    ),
    'object' => 
    array (
      'key' => 'redactor.tabifier',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '973e3973d6514c9d0b37bc1994aa3790' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.replaceTags',
    ),
    'object' => 
    array (
      'key' => 'redactor.replaceTags',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3b9b25636ed12c70e6288e5eb68b612a' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.replaceStyles',
    ),
    'object' => 
    array (
      'key' => 'redactor.replaceStyles',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '5227adc2a6d205b415c83fa734c9f1fe' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.removeDataAttr',
    ),
    'object' => 
    array (
      'key' => 'redactor.removeDataAttr',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'dc0e9c2365cf4d0a6bba08b39279c684' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.removeAttr',
    ),
    'object' => 
    array (
      'key' => 'redactor.removeAttr',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f22c932f669a7e021122887df67d8169' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.allowedAttr',
    ),
    'object' => 
    array (
      'key' => 'redactor.allowedAttr',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '465ff2011c2b50d812b0993474285f86' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.dragImageUpload',
    ),
    'object' => 
    array (
      'key' => 'redactor.dragImageUpload',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c3395445740625a1ea9da4a87cdebff5' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.dragFileUpload',
    ),
    'object' => 
    array (
      'key' => 'redactor.dragFileUpload',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '07b07d061ee7366b48a0ea0da5d27370' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.replaceDivs',
    ),
    'object' => 
    array (
      'key' => 'redactor.replaceDivs',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'cd577149d5b247f32cb2843c7a00c5a5' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.preSpaces',
    ),
    'object' => 
    array (
      'key' => 'redactor.preSpaces',
      'value' => '4',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '70a1fc4045055c160e4c85184f407002' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.parse_parent_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.parse_parent_path',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '87a39a97c43ad7860aef3d2c05e01125' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.increment_file_names',
    ),
    'object' => 
    array (
      'key' => 'redactor.increment_file_names',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0c64e62eb9f9d9cf72f04e5f80faaf60' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.parse_parent_path_height',
    ),
    'object' => 
    array (
      'key' => 'redactor.parse_parent_path_height',
      'value' => '10',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f999e0b85b2658236a16cb3d6f2ee36b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.baseurls_mode',
    ),
    'object' => 
    array (
      'key' => 'redactor.baseurls_mode',
      'value' => 'absolute',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:21:56',
    ),
  ),
  'bcbcb09f498ac7df64d62cbfb5793881' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.showDimensionsOnResize',
    ),
    'object' => 
    array (
      'key' => 'redactor.showDimensionsOnResize',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f479ed6cb36faed28ba40657b46b65ac' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_counter',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_counter',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '80e48f68289c46eec8f61317b013d4c6' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_fontcolor',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_fontcolor',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '6968e100daff6d36473db340cdb9efbc' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_fontfamily',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_fontfamily',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '2016-04-22 18:23:50',
    ),
  ),
  'de16933ed00f250dc5221a4fd4590f37' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_fontsize',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_fontsize',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '2016-04-22 18:24:18',
    ),
  ),
  '1047c03697bbc108bbbd90663671bba3' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_limiter',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_limiter',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b32fe591f8ea3cefcb8504782ae6df4b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_table',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_table',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0e1412f0de42c37dcbdc88341e383fdd' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_textdirection',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_textdirection',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '2016-05-26 13:55:18',
    ),
  ),
  'e05f20992ddfd45db0226a8685cfe671' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_video',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_video',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '2016-04-22 18:25:06',
    ),
  ),
  '1969181131e2120a55e88d190e9472f6' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_replacer',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_replacer',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e7d0633f4166e010ff756e3003c6a3bf' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_syntax',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_syntax',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '03d3588b4535bbc26f67d9efd76760a8' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_speek',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_speek',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3b5e3b125f762a079686234ae282bc06' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_contrast',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_contrast',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f4838e692b4fcc6a6baee84b29cabf9f' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_eureka',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_eureka',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '9ce6853c2d38ada774e3f94b201f6c48' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_eureka_shivie9',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_eureka_shivie9',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '1a642dedcdf42c6216dd033fbdf792d6' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.eurekaUpload',
    ),
    'object' => 
    array (
      'key' => 'redactor.eurekaUpload',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '092ca19577897cf7b619a2fd2c0ac176' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.initial_directory_depth',
    ),
    'object' => 
    array (
      'key' => 'redactor.initial_directory_depth',
      'value' => '3',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '906112b87200ce07391615958977c26c' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_zoom',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_zoom',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '149ed42bab75cbaa8389ecafbe94630a' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_download',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_download',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f23e93186d6b710d2f05ad479deccd42' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_imagepx',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_imagepx',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'af162da975e3fbe740f6088f4e45777d' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_imageurl',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_imageurl',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0c1ce7c4559014c0a4cb468d392af45a' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_breadcrumb',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_breadcrumb',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8d1a72b23a9dfa788598827d5753cecd' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_norphan',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_norphan',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '210cb84a0cb5b1be141914c88b6404d8' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_baseurls',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_baseurls',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '74dd3d8846f444014e9155f2b2dca0a8' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.textexpander',
    ),
    'object' => 
    array (
      'key' => 'redactor.textexpander',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'dffa63401662c2a4ca46dc3d98f6d41f' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.speechPitch',
    ),
    'object' => 
    array (
      'key' => 'redactor.speechPitch',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '1be7ab6dfaeb69915e23bcb5970d4ce7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.speechRate',
    ),
    'object' => 
    array (
      'key' => 'redactor.speechRate',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a86e6efd96825b7ded7cb371b9a9fbf4' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.speechVolume',
    ),
    'object' => 
    array (
      'key' => 'redactor.speechVolume',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a59261c026d8bad2b770a1a2b032c724' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.speechVoice',
    ),
    'object' => 
    array (
      'key' => 'redactor.speechVoice',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'cef7ecb93ea7421dd6979b883fc442f0' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.counterWPM',
    ),
    'object' => 
    array (
      'key' => 'redactor.counterWPM',
      'value' => '275',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '9cc1e624176ebe25d7d5ed6def43a887' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.codemirror',
    ),
    'object' => 
    array (
      'key' => 'redactor.codemirror',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ee3a71309f69e4e15c519f95190d1de2' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_uploadcare',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_uploadcare',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c90602b58230f7f8a4237c1ee3358dc0' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.uploadcare_pub_key',
    ),
    'object' => 
    array (
      'key' => 'redactor.uploadcare_pub_key',
      'value' => 'demopublickey',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Uploadcare',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '532c0b0130c344e9ad2e26d674a461fd' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.uploadcare_locale',
    ),
    'object' => 
    array (
      'key' => 'redactor.uploadcare_locale',
      'value' => 'en',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Uploadcare',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '2b4c8674b3cf5bd7b309bd879d61b500' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.uploadcare_crop',
    ),
    'object' => 
    array (
      'key' => 'redactor.uploadcare_crop',
      'value' => 'free',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Uploadcare',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '84984aa286baba28ffda9f6134a7770e' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.uploadcare_tabs',
    ),
    'object' => 
    array (
      'key' => 'redactor.uploadcare_tabs',
      'value' => 'all',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Uploadcare',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '54fbeb1b8901bdb913ac01509c695241' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.loadIntrotext',
    ),
    'object' => 
    array (
      'key' => 'redactor.loadIntrotext',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '01a95c5b0a8e0ff2e774050364e67ea1' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.limiter',
    ),
    'object' => 
    array (
      'key' => 'redactor.limiter',
      'value' => '150',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
);