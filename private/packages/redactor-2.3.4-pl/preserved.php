<?php return array (
  '0703c947b607ad1e11a8ef74bf5b81b0' => 
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
  '905b8119bb3724b6025777888be3275f' => 
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
            $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'redactor-2.3.1.min.css\');
            if ($redactor->degradeUI) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if ($redactor->rebeccaDay) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if ($customCss) $modx->controller->addCss($customCss);
        }
        else {
            $modx->lexicon->load(\'redactor:default\');
            $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'redactor-2.3.1.min.css\');
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
            $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'redactor-2.3.1.min.css\');
            if ($redactor->degradeUI) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if ($redactor->rebeccaDay) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if ($customCss) $modx->controller->addCss($customCss);
        }
        else {
            $modx->lexicon->load(\'redactor:default\');
            $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'redactor-2.3.1.min.css\');
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
  '61414042ea564da7b382fbbfd453cef2' => 
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
  'c63cd8b06f9abaf31fce167ba40082ed' => 
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
  '2b43a7c8074fea2a9ea116eeeded2dcd' => 
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
  '690fd43fc9017db5c0788f94ecf310d3' => 
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
  '5b6ce0bf0841f5a94d0365f13248f1f8' => 
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
  '637a45118cef14c661bc8badb18c0249' => 
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
  '892ab84c92d23b20811d36533dee6d9e' => 
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
  'a443533728b33f6257a57ae011b441a2' => 
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
  'a44f8dd41a50406d2baffe8f9716c1b3' => 
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
  'ab59c0395696b2ab74c86c1f0d9052fc' => 
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
  'e8bd144894932c1d31dbb9576acc9ac0' => 
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
  '4db9faefa0bbc68539040fa5b357a4f5' => 
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
  '5ba9df3f2c6c7756863461c9aee10e1a' => 
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
  'ccb8815b85009e60514b44bac3ce020c' => 
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
  '2b3d583515016bae4b2585e8075fd8ea' => 
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
  '1cf4c7ad9925ac51c875392b195a90f5' => 
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
  '8cc809b5b8b143ff9e95444dd60be388' => 
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
  'fcf501f2ad7c30f10f74f534cb265ea5' => 
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
  'ad5580d4fc167cbd68c6884809ba6813' => 
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
  '5c7860b457f6af20d51929d6153dbadd' => 
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
  'da18971f67e9ce72602b867e0a6d4dda' => 
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
  '7a20f970d48ffa6db3b6a394fce394e0' => 
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
  'ecb97338f2deba1c86441e0fa393f753' => 
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
  '5d96c3a0f35ff488f3a8ed32894c03aa' => 
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
  '00e5cafe825e0bc8b95f4ba345b74766' => 
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
  '247abc2a3a0c9d03f95c22577515822d' => 
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
  '5edc864a0743a576de6dcd60e823d260' => 
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
  '7f241a3f23f4805feaba16d5dfd73ed2' => 
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
  '4b04f85421dbfb47882066c3917c271d' => 
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
  '61df761cfd321f521de25f9131bbda25' => 
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
  '4fa3266d7513e5867c35f3bdb0a069a4' => 
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
  '9bb73722fa3db33bd58769acf378a0fc' => 
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
  '29d12813756a3227b25d1aee23488780' => 
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
  '7ba7e4f32c58b9d815b5688cc57d8b48' => 
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
  '3367d09e29dffff6e7d5f881171d8fe9' => 
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
  'b20a0591a38200c780c324deba52aca2' => 
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
  '4a073d8cb5a6b0cb5f3680d183b9be9b' => 
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
  'd29ac7a66d2bf2d0a5f6a977796f658c' => 
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
  '8e10ece82979aeb74a7e6822fe994f25' => 
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
  '7ce2589998d175cb6b62e7d2cb1b1ab6' => 
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
  '30b4aef181be04f5dfc734624903b0a7' => 
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
  '8ba521eb47397e4e5fbbcbb48479633d' => 
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
  '329e5be7bc50edfb0cbc5247d3ed788a' => 
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
  '2339cdb5504e5d875af02a2125f29257' => 
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
  '9384bf70b7fb63a02624d792fd224e15' => 
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
  'a9e78d27c38e9df8646f17b4ac5bd0d7' => 
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
  'ad68c7ce25ce7fd3fe9011f0734efdda' => 
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
  'c91b17aa56ddd1b4b8e15f3eb609d0c4' => 
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
  'e4c4d295ec951258753e2684cf2ef0df' => 
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
  '65a12d759e29f130d40e58e48133a2ff' => 
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
  'a896baeeba0b2a4bc1b488e673a10960' => 
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
  '8c79d8a2a7bc33c2859ad9d0a3a6edc0' => 
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
  '8f6cad64232f1b956333a029fd5971f7' => 
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
  '8ab2fcf877e2e85d18b545638cb509ad' => 
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
  'df4f1d831f4cbd70f2e4a6105215b365' => 
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
  'deee096cd6614da7db6d0a3103d98dd9' => 
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
  '643ee6e421564669b92f06a7059ec56d' => 
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
  'c339d01e6a5ce2ba914fa2b44c6c625e' => 
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
  '6735cc04491b0a3b78a3c0526f592d97' => 
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
  '9cee4b6f8193db322c490ad096dc461f' => 
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
  '4e32e121d8d641501f41c445648127f2' => 
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
  '0a8b42429233d3f982189fd7da4e6904' => 
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
  '5ba4242b3a4fce7d2b940d98f7910346' => 
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
  '2559a15d0ea3b7a80719c842b35c46fd' => 
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
  'b434c038482bb331d3ce945472790f71' => 
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
  'e5c4d52ac51456df0893aee70210a8f0' => 
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
  '5d56f5c61c8a865f4e36a84845a98e8f' => 
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
  '6599c834d1474d51ca523856d9a4ce31' => 
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
  '657cb1faf7f9b05dd8d00fd0330a587a' => 
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
  '6f02855223c380b2e3669dabd92d6d36' => 
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
  '3d055ed5b61b270e19086d7e5f465656' => 
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
  'eaffdd46ec801073f786cdcdb6cb97fb' => 
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
  'a79b91561f0a8eb533cca23cc6ce0fe9' => 
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
  'cb290f74ff5386a6e32c4790e0208f93' => 
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
  'ab98606dd8e07152b464949d31b11c08' => 
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
  '7c4dda363dd3117f58901fdfa7bd5a52' => 
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
  '691b6f2d5df3cd15d6a717d2e21d9be1' => 
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
  'b18af4ed7bc5c0f288c389aee2170aad' => 
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
  '88b3281069fbca38b5d54d99886d2674' => 
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
  '2e1619db284176b24000b427dfca9de5' => 
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
  'e88c44c4afb3db5c8f49487c19c2910a' => 
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
  '9067a99bfab618f6e08557534a03d3e6' => 
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
  '2e32c7c6f4c3d7e8dd78c8553bd4d12e' => 
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
  'a5817d5e9bea68ea171275ed47537a1a' => 
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
  '04123d23122bb59674b40af4850ada93' => 
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
  '0e40fd9b85fe65182e75c50268b021d4' => 
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
  'd07c6b163ae28f7cfd51176c1bea3fb9' => 
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
  '634dd201f37f3e6fcd151718792ab851' => 
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
  '881438a433ae90f98b106ea5af2c6358' => 
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
  '52183b581e5fcd5dbd1200737ea992fa' => 
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
  '09f3d100203f8ada5406182fd8911875' => 
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
  '6f116175860a04ac422445f984cdb795' => 
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
  '5703be9ab7accac485d9be4a64b18acb' => 
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
  'ed7a2b02496f57fd17dc9eaff025d1fb' => 
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
  'b2b873bed4ba61b2364b74fe71952a06' => 
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
  '7a961bee2f4fc7ef710484373d40ac42' => 
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
  'd516c86e45246c72493b078f698d76c9' => 
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
  '382475f0523266bf09d9c93f93c55943' => 
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
  '8787e551fc21806911662fbbd590849f' => 
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
  '7698c49b49e3ce93dff47cf430c1d4a6' => 
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
  '2fa93f1330616aa286c5ee1673d5afcc' => 
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
  '0bc99df212aede66a97fe2db425494b1' => 
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
  'a14cf1440340fc38d5ca6a5043807351' => 
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
  '79e5c65e4373a175538a3d489fc68acf' => 
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
  'fc641668a3cacee942402163e39f7d98' => 
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
  '7d58f5ff232dcb21ea551fb16bb55485' => 
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
  '8d1ccd1f9dfff6019e2b0d3268780938' => 
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
  'c7d9efc6bb44ff8724d8c6fd8d384325' => 
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
  'b6495356b52d1526cfef7d702b34dad3' => 
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
  'b1640399a954f308326a88cd8c0e1845' => 
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
  '34ca08ff711bbd7b9a566f9f44f4e18d' => 
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
  'd623215bcb638cd0bbc829820ff86c92' => 
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
  'a438b04f79b373fcf925e1ae266343f0' => 
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
  '43ad5905280f574ab55863b205dccf2d' => 
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
  'eb8aace0e6083df466f97051dd4bf779' => 
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
  '5b6d09a2e816f9bba10d06a051e32eef' => 
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
  'ec9383627b22d99cbebf0a92ef782265' => 
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
  '973e233798ca7fc089706c0e8a197aec' => 
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
  '4b26851016d123e3404b0182429e72d3' => 
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
  '37f7c1a5ce7fb7ea72d2454652929a2a' => 
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
  '438618c87d5ea2e179d42bdc6bdc47ea' => 
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
  'd2a04edf9cab739c012dc5d056c0f0b9' => 
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
  'a867c49c382921365aebc5574f96ca01' => 
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
  '026dbf7a8a4005c04faaeb28a8783f67' => 
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
  'bbb07a81454e1aad8fcea60c0b8e3950' => 
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
  'a61660e56b77977f8a299139e1c85940' => 
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
  '1759acf028fae91e3bb548354a2c6a1e' => 
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
  '779e8745243af5e8df4c073699430553' => 
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
  '046de6c5ed252b4fb3e275baf1381263' => 
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
  '5afa059ad003c6402a78c67ea9943dc8' => 
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
  '1cecf5992656a6e64bb206bd57fe7e4b' => 
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
  '74d9f5017cfeb55cc73a1e700d4e5383' => 
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
  'a7c70778d6a58a35aae4ed4215447eda' => 
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
  '47a4ed3c61596217a53c3bc49b14a069' => 
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
  'ba16255854e57fa7f438c29bbceff04d' => 
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
  'a85cb3e605d290f06c74958f357f6527' => 
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
  'f3854ca9aaf1c7afd2b9e347c933c85e' => 
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