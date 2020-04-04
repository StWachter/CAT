<?php return array (
  '0159b3df2ebcbb23ca515ac7a1b69dc7' => 
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
  'a487483336f64272bac12fd39df22286' => 
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
            $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'redactor-2.3.4.min.css\');
            if ($redactor->degradeUI) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if ($redactor->rebeccaDay) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if ($customCss) $modx->controller->addCss($customCss);
        }
        else {
            $modx->lexicon->load(\'redactor:default\');
            $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'redactor-2.3.4.min.css\');
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
            $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'redactor-2.3.4.min.css\');
            if ($redactor->degradeUI) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if ($redactor->rebeccaDay) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if ($customCss) $modx->controller->addCss($customCss);
        }
        else {
            $modx->lexicon->load(\'redactor:default\');
            $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'redactor-2.3.4.min.css\');
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
  '1c7ceb4997f7a535f5cf832d806f3695' => 
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
  '522334667b3cdbafe43a35a78e2af072' => 
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
  '2ecbb3044318d08e99f08ab5b8c448cd' => 
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
  'a95f34c82d0f9ede68521ad46289763e' => 
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
  '3cd22e4d064888eed55af6dd420ce9e4' => 
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
  'a2b49a41ed66dcc7181c051e7b376b84' => 
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
  '0806054da53fd294bcb74bd223831fa2' => 
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
  'b3fd12927c73f2cdbb8947af4ff3e311' => 
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
  'a16f4cc9141addf8a0c0eb62de591df4' => 
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
  '06cbe1d3117de366a7fd8b0320c22500' => 
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
  '9a20ba1078ff4a0bab147f42b513c353' => 
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
  'd9e4da92fb2100adb08309551ae72125' => 
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
  '53ad4208f05a98b81485b09fb3bb4f04' => 
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
  '1c027c7e3f2eea20c8c9c01bdebcfbe8' => 
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
  '48c7dd5f6bef9a7f348ae11866710de8' => 
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
  '7ad73977f40197c6e253fcbe5e03c8d2' => 
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
  'd889b4150dcc6c03121692ae1023fc93' => 
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
  '4ad891bac0738622d4f240cb960b2a87' => 
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
  '4ccdb35f38df5d8502734a1bf069af62' => 
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
  '9d9634e17fe8e513175330c6a2f5a6d6' => 
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
  'b13dcd87b443cc8172727ae8d004a3bc' => 
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
  '967fc9e749886fc81a769e5c54c6729b' => 
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
  '69478d31bb92f697f919c9403bc96c74' => 
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
  'cccc88a190d8e7223f7b0eddd54ee191' => 
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
  '27cbefbcbdae40268f36a8f6a6f84db3' => 
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
  '9d588be99a08ec71d5e57b1dcce139fe' => 
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
  '2a12bee6763f6695626e15c6b84b71b7' => 
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
  '8281a7a9540a8dfcfb9e1a737587390c' => 
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
  'f90f4d747f0ec18e8845a946ab144614' => 
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
  '04c6b08bc64f1c4bb15f90c64bbe730a' => 
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
  'b20854e83a4b1a9c4db8a3378571d447' => 
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
  'bbd97dec2f934f3c2298436701a87212' => 
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
  'a9d80fe0e488f52fc6e68454a1eff9d2' => 
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
  'c70722b125181b907872a5991df3c140' => 
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
  'a78a4b97f652c7c14fe2cb45dd98f53f' => 
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
  '6e82d36a9d20a4b8fec3e31c83ee1e4b' => 
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
  '9a23bdb00f26a02a64b09eaf38d598b8' => 
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
  '87b0c4d82259908b3cfd0b4d390764a7' => 
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
  '712cec8ef621040fedad66adc94bf727' => 
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
  '2d694c5d26175a606b40418fb5942bbe' => 
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
  '8f6597d37835a8e08b31267a6620121f' => 
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
  '7c8024e2dd381e890b666dbd85399b04' => 
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
  'e478f7ae7339849e3d549822f678f159' => 
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
  '65ce202252837a71eda1c535dac2ef47' => 
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
  '63a79ee10e6fb56fbd28334e1f0eda4b' => 
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
  'cbc24ae81eff97935018fa8afeb0c9b2' => 
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
  'a8adc16bdc2926b47c0ad91d6a2dae6d' => 
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
  '4b0fd163eca379b07af92e4dc58750a3' => 
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
  'b58175755d131576563c1b217e80c615' => 
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
  '841ead9070ac035f35c0969ba49351d6' => 
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
  '49257a4727c9a45436382e1dbf237a4d' => 
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
  'a55867e4e263fc268d83d68c9327edad' => 
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
  '44dc55c7aa96030ddef43e5c490c9e32' => 
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
  'b0903774ce4a5e1452e1ce625d51cb5e' => 
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
  '040e9152e14b6f2f6cca1d5d840ee95b' => 
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
  '1459f6136d79f707f3928f063ea49427' => 
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
  '30b56ec8d4fab0605f3442cfcf3910d2' => 
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
  'ba8718ec820e05202a6b62d827d74861' => 
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
  'c79f8fe4517f2678bef3f6f93fcbf8d0' => 
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
  'a5476b3248c47c07d162cfeac14c098c' => 
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
  '6c22f86bf7b248d4bba45ae7dda90d46' => 
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
  'de7e14d27d9265e238ad37e62016a1c4' => 
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
  '323a3e16467517a8b9f4866a10985838' => 
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
  'f235af28575f299339c09b3dc84b0337' => 
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
  'a3c815bc4f6a22a24ec0e4a798828a53' => 
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
  '5ea4f8b1a00ef72ab75668a86fbbe28e' => 
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
  '21b3c82f3baae7cb232c332eaa6c259a' => 
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
  '7eea8c0e96f3ddcaebc1550bbaea797a' => 
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
  'd28934ce326e53fb7a75590977b1dd2a' => 
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
  '2cd4686559c5964ce1d616ca12a03c4d' => 
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
  'aa6b55ce29e9717fe261a36adf21dd1b' => 
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
  '876e6cd7c2eaeb2147982f61a5130430' => 
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
  'f2e53ebe915eb24965122ca9e686a5d2' => 
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
  '8b8552c538030bfb5862d1079428d2d9' => 
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
  '10eef7585739deeb6860729f4d13d01a' => 
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
  '503144129e951a564c33aa8a96b1c067' => 
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
  '86b6fac7bd830063cc6e07cea545c5b4' => 
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
  '3067fd33a172780953d6f9310e405af3' => 
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
  '0644d9fc2922b9155294804dd3641085' => 
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
  '071fd7fdb0124a2defe885f7719ad84e' => 
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
  'f7dd9e566969f66d73f3f0347f5e5d19' => 
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
  '147c11ae94a862b132f9a919c7ff3365' => 
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
  '134ba0e107e3682c8fbf83c8f9527fd5' => 
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
  'ef7febbcd47bc16e3373d18f6ee00388' => 
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
  '826974e217341ffc8f26895c7203fe7e' => 
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
  'a6652801b1d4a7b7d5091021bc5a4dce' => 
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
  'e923087288f697e5575a8907a8f58049' => 
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
  '0d7a0348701c382f788363abdbfa487d' => 
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
  'adf15f9a64efa908035697c82c79a6e6' => 
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
  'f91af21add8cc55918a956fed1301e67' => 
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
  '55f9192df2f43c6cf1880498b037d153' => 
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
  'c888c6467f69a144f0b3ce83034cb31b' => 
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
  'a251c1f7520f7892b7f2c7183cc9f443' => 
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
  '81af8d10844c92f44023e84153ac8054' => 
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
  '5ef17ec41aa9ae78f22bf44737914c1c' => 
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
  '30237193a3ad4a8a9529b50f0c8e3b78' => 
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
  '0a8c208ae1aea45d4c38c82f3105d556' => 
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
  '54c0bf94cf9fd55e89d89e78f2331299' => 
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
  '5005129cd95064a7b555e779964e0af0' => 
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
  '5f67859f38dfe3cb92237b3e84278810' => 
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
  '1839783bd34bfa27fdd574298e5f23cd' => 
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
  'bd9cf691af5ccf9d0f6d69dc528fcbfe' => 
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
  '1d35acc5b9a30d4aa4838221fc83a7ab' => 
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
  'b35160f548952a5b5997de1a685b3c34' => 
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
  'c975accf610e68daf5ac0e82b03937c3' => 
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
  '5b5288a7369e79d704255d71d45130ab' => 
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
  'b54aaf53e38be47ce7d4a104aa68f9cf' => 
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
  '130303fcfc6de0ab3c6a8a61142d933a' => 
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
  'fe17404338cf8a6faefc746ae14a08fc' => 
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
  'd7ad8d63da98373ab64124e403d71099' => 
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
  'bd260b3eef9a180d3cabae5c09ccda49' => 
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
  '51046d12717b3ef41313f837fcd63436' => 
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
  '3de9a7b84bdc495e4376395aa6e4bbb0' => 
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
  '20a9c431ba5e51a944073deb9b5a433d' => 
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
  'dbd5696a7240e07252d8dc50c1600ef1' => 
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
  '7786d9d86d0ae69014835377d093b7de' => 
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
  'd715a359f664b439824bf1990804b071' => 
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
  '02f81b867cd08674c2e2ac37959ae3dd' => 
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
  '61faf50d9e5904122fd520c242f6c3ca' => 
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
  '08d08e9c237b5627414b10904c7ef43d' => 
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
  'b7acf8c2487b99e09ff4578bc7e53840' => 
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
  '7900674e55893fed871acfdea8f093dc' => 
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
  'a0315cacee1aa4fc879ef6f5a4db6e4c' => 
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
  '2d5efdb8db3d6d7e9312739c0fe431a1' => 
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
  '76178eb011918fbb85c8d90bcaa29010' => 
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
  '48ef8c8e3107eeb613b31ba504976fb2' => 
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
  '76ca15c7aea343d1f931b965cd25a62d' => 
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
  '83ff163e0023af16c0a22604bdbc1d8c' => 
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
  '9cec2eb071cc46ec6ca5f1d20e4a0276' => 
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
  'fa997238f5ef4959ef4c83d86736bcb4' => 
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
  '68f42da33c3336e7becf56906fcbe84f' => 
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
  'e85ae7e34b348ed2ad1377d463da4d12' => 
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
  '2371bf8a63353af20cb2282b59ad8672' => 
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
  '7acd0395efe8c3e89698775def05d12a' => 
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
  'f9a3819691929627a29cfed45ce4a93b' => 
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
  '5a1d0f50e4a8202fdd12b3c3986773ad' => 
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
  '9a801bdf89a1a03852d03c642cf80002' => 
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