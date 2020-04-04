<?php return array (
  '2a66fe42bc00645548bb9d3dab8265a2' => 
  array (
    'criteria' => 
    array (
      'name' => 'seopro',
    ),
    'object' => 
    array (
      'name' => 'seopro',
      'path' => '{core_path}components/seopro/',
      'assets_path' => '{assets_path}components/seopro/',
    ),
  ),
  '445bc1cc57a9e7147a87c732d5a77dd0' => 
  array (
    'criteria' => 
    array (
      'key' => 'seopro.delimiter',
    ),
    'object' => 
    array (
      'key' => 'seopro.delimiter',
      'value' => '|',
      'xtype' => 'textfield',
      'namespace' => 'seopro',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8ba2e8dec0f53bb96dc322453f849827' => 
  array (
    'criteria' => 
    array (
      'key' => 'seopro.fields',
    ),
    'object' => 
    array (
      'key' => 'seopro.fields',
      'value' => 'longtitle:70,description:155,alias:2023',
      'xtype' => 'textfield',
      'namespace' => 'seopro',
      'area' => 'general',
      'editedon' => '2016-04-22 17:36:43',
    ),
  ),
  '08d96c0d16ebe25b1e2e0469a7e7f3da' => 
  array (
    'criteria' => 
    array (
      'key' => 'seopro.usesitename',
    ),
    'object' => 
    array (
      'key' => 'seopro.usesitename',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'seopro',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '40f13e64fab0297baa1d8295766f707d' => 
  array (
    'criteria' => 
    array (
      'key' => 'seopro.disabledtemplates',
    ),
    'object' => 
    array (
      'key' => 'seopro.disabledtemplates',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'seopro',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '2f533dfc372db803a4fd78ea4af7b614' => 
  array (
    'criteria' => 
    array (
      'key' => 'seopro.max_keywords_title',
    ),
    'object' => 
    array (
      'key' => 'seopro.max_keywords_title',
      'value' => '4',
      'xtype' => 'textfield',
      'namespace' => 'seopro',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '6417a3173cd5097499eb788c4c472c62' => 
  array (
    'criteria' => 
    array (
      'key' => 'seopro.max_keywords_description',
    ),
    'object' => 
    array (
      'key' => 'seopro.max_keywords_description',
      'value' => '8',
      'xtype' => 'textfield',
      'namespace' => 'seopro',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '2329985c34015e2ca3ea89a1514ef819' => 
  array (
    'criteria' => 
    array (
      'key' => 'seopro.searchengine',
    ),
    'object' => 
    array (
      'key' => 'seopro.searchengine',
      'value' => 'google',
      'xtype' => 'textfield',
      'namespace' => 'seopro',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '78387a68abd38fb041f16dcc4097a641' => 
  array (
    'criteria' => 
    array (
      'key' => 'seopro.user_name',
    ),
    'object' => 
    array (
      'key' => 'seopro.user_name',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'seopro',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '551422f1c9ba82dcde269a4064e9eebd' => 
  array (
    'criteria' => 
    array (
      'key' => 'seopro.user_email',
    ),
    'object' => 
    array (
      'key' => 'seopro.user_email',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'seopro',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a0135bdcb8a3f7fa545d029b0d264898' => 
  array (
    'criteria' => 
    array (
      'category' => 'seoPro',
    ),
    'object' => 
    array (
      'id' => 16,
      'parent' => 0,
      'category' => 'seoPro',
      'rank' => 0,
    ),
  ),
  'fce6205d3aba8564fc5633740da93e71' => 
  array (
    'criteria' => 
    array (
      'name' => 'seoPro',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'seoPro',
      'description' => 'SEO optimizing plugin for MODx Revolution.',
      'editor_type' => 0,
      'category' => 16,
      'cache_type' => 0,
      'plugincode' => '/**
 * The base seoPro snippet.
 *
 * @package seopro
 */
$seoPro = $modx->getService(\'seopro\', \'seoPro\', $modx->getOption(\'seopro.core_path\', null, $modx->getOption(\'core_path\') . \'components/seopro/\') . \'model/seopro/\', $scriptProperties);
if (!($seoPro instanceof seoPro)) {
    return \'\';
}

$disabledTemplates = explode(\',\', $modx->getOption(\'seopro.disabledtemplates\', null, \'0\'));

switch ($modx->event->name) {
    case \'OnDocFormRender\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }
        
        
        $currClassKey = $resource->get(\'class_key\');
        $strFields = $modx->getOption(\'seopro.fields\', null, \'pagetitle:70,longtitle:70,description:155,alias:2023,menutitle:2023\');
        $arrFields = array();
        if (is_array(explode(\',\', $strFields))) {
            foreach (explode(\',\', $strFields) as $field) {
                list($fieldName, $fieldCount) = explode(\':\', $field);
                $arrFields[$fieldName] = $fieldCount;
            }
        } else {
            return \'\';
        }

        $keywords = \'\';
        $modx->controller->addLexiconTopic(\'seopro:default\');
        if ($mode == \'upd\') {
            $url = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', \'full\');
            $url = str_replace($resource->get(\'alias\'), \'<span id=\\"seopro-replace-alias\\">\' . $resource->get(\'alias\') . \'</span>\', $url);
            $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
            if ($seoKeywords) {
                $keywords = $seoKeywords->get(\'keywords\');
            }
        } else {
            if ($_REQUEST[\'id\']) {
                $url = $modx->makeUrl($_REQUEST[\'id\'], \'\', \'\', \'full\');
                $url .= \'/<span id=\\"seopro-replace-alias\\"></span>\';
            } else {
                $url = $modx->getOption(\'site_url\') . \'<span id=\\"seopro-replace-alias\\"></span>\';
            }
        }

        if ($_REQUEST[\'id\'] == $modx->getOption(\'site_start\')) {
            unset($arrFields[\'alias\']);
            unset($arrFields[\'menutitle\']);
        }


        $config = $seoPro->config;
        unset($config[\'resource\']);
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            seoPro.config = \' . $modx->toJSON($config) . \';
            seoPro.config.record = "\' . $keywords . \'";
            seoPro.config.values = {};
            seoPro.config.fields = "\' . implode(",", array_keys($arrFields)) . \'";
            seoPro.config.chars = \' . $modx->toJSON($arrFields) . \'
            seoPro.config.url = "\' . $url . \'";
        });
    </script>\');

        /* include CSS and JS*/
        $version = $modx->getVersionData();
        if($version[\'version\'] == 2 && $version[\'major_version\'] == 2){
            $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr.css\');
        }else{
            $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr23.css\');
        }
        $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/seopro.js??v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));
        $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/resource.js?v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));

        break;

    case \'OnDocFormSave\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }
        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        if (!$seoKeywords && isset($resource)) {
            $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        }
        if($seoKeywords){
            if (isset($_POST[\'keywords\'])){
                $seoKeywords->set(\'keywords\', trim($_POST[\'keywords\'], \',\'));
            } else {
                $seoKeywords->set(\'keywords\', \'\');
            }
            $seoKeywords->save();
        }
        break;

    case \'onResourceDuplicate\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }

        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        if (!$seoKeywords) {
            $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        }
        $newSeoKeywords = $modx->newObject(\'seoKeywords\');
        $newSeoKeywords->fromArray($seoKeywords->toArray());
        $newSeoKeywords->set(\'resource\', $newResource->get(\'id\'));
        $newSeoKeywords->save();
        break;

    case \'OnLoadWebDocument\':
        if ($modx->context->get(\'key\') == "mgr") {
            break;
        }
        $template = ($modx->resource->get(\'template\')) ? (string)$modx->resource->get(\'template\') : \'\';
        if (in_array($template, $disabledTemplates)) {
            break;
        }
        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $modx->resource->get(\'id\')));
        if ($seoKeywords) {
            $keyWords = $seoKeywords->get(\'keywords\');
            $modx->setPlaceholder(\'seoPro.keywords\', $keyWords);
        }
        $siteBranding = (boolean) $modx->getOption(\'seopro.allowbranding\', null, true);
        $siteDelimiter = $modx->getOption(\'seopro.delimiter\', null, \'/\');
        $siteUseSitename = (boolean) $modx->getOption(\'seopro.usesitename\', null, true);
        $siteID = $modx->resource->get(\'id\');
        $siteName = $modx->getOption(\'site_name\');
        $longtitle = $modx->resource->get(\'longtitle\');
        $pagetitle = $modx->resource->get(\'pagetitle\');
        $seoProTitle = array();
        if ($siteID == $modx->getOption(\'site_start\')) {
            $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $siteName;
        } else {
            $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $pagetitle;
            if ($siteUseSitename) {
                $seoProTitle[\'delimiter\'] = $siteDelimiter;
                $seoProTitle[\'sitename\'] = $siteName;
            }
        }
        $modx->setPlaceholder(\'seoPro.title\', implode(" ", $seoProTitle));
        if ($siteBranding) {
            $modx->lexicon->load(\'seopro:default\');
            $modx->regClientStartupHTMLBlock(\'<!-- \' . $modx->lexicon(\'seopro.branding_text\') . \'-->\');
        }
        break;
}',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * The base seoPro snippet.
 *
 * @package seopro
 */
$seoPro = $modx->getService(\'seopro\', \'seoPro\', $modx->getOption(\'seopro.core_path\', null, $modx->getOption(\'core_path\') . \'components/seopro/\') . \'model/seopro/\', $scriptProperties);
if (!($seoPro instanceof seoPro)) {
    return \'\';
}

$disabledTemplates = explode(\',\', $modx->getOption(\'seopro.disabledtemplates\', null, \'0\'));

switch ($modx->event->name) {
    case \'OnDocFormRender\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }
        
        
        $currClassKey = $resource->get(\'class_key\');
        $strFields = $modx->getOption(\'seopro.fields\', null, \'pagetitle:70,longtitle:70,description:155,alias:2023,menutitle:2023\');
        $arrFields = array();
        if (is_array(explode(\',\', $strFields))) {
            foreach (explode(\',\', $strFields) as $field) {
                list($fieldName, $fieldCount) = explode(\':\', $field);
                $arrFields[$fieldName] = $fieldCount;
            }
        } else {
            return \'\';
        }

        $keywords = \'\';
        $modx->controller->addLexiconTopic(\'seopro:default\');
        if ($mode == \'upd\') {
            $url = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', \'full\');
            $url = str_replace($resource->get(\'alias\'), \'<span id=\\"seopro-replace-alias\\">\' . $resource->get(\'alias\') . \'</span>\', $url);
            $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
            if ($seoKeywords) {
                $keywords = $seoKeywords->get(\'keywords\');
            }
        } else {
            if ($_REQUEST[\'id\']) {
                $url = $modx->makeUrl($_REQUEST[\'id\'], \'\', \'\', \'full\');
                $url .= \'/<span id=\\"seopro-replace-alias\\"></span>\';
            } else {
                $url = $modx->getOption(\'site_url\') . \'<span id=\\"seopro-replace-alias\\"></span>\';
            }
        }

        if ($_REQUEST[\'id\'] == $modx->getOption(\'site_start\')) {
            unset($arrFields[\'alias\']);
            unset($arrFields[\'menutitle\']);
        }


        $config = $seoPro->config;
        unset($config[\'resource\']);
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            seoPro.config = \' . $modx->toJSON($config) . \';
            seoPro.config.record = "\' . $keywords . \'";
            seoPro.config.values = {};
            seoPro.config.fields = "\' . implode(",", array_keys($arrFields)) . \'";
            seoPro.config.chars = \' . $modx->toJSON($arrFields) . \'
            seoPro.config.url = "\' . $url . \'";
        });
    </script>\');

        /* include CSS and JS*/
        $version = $modx->getVersionData();
        if($version[\'version\'] == 2 && $version[\'major_version\'] == 2){
            $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr.css\');
        }else{
            $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr23.css\');
        }
        $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/seopro.js??v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));
        $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/resource.js?v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));

        break;

    case \'OnDocFormSave\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }
        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        if (!$seoKeywords && isset($resource)) {
            $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        }
        if($seoKeywords){
            if (isset($_POST[\'keywords\'])){
                $seoKeywords->set(\'keywords\', trim($_POST[\'keywords\'], \',\'));
            } else {
                $seoKeywords->set(\'keywords\', \'\');
            }
            $seoKeywords->save();
        }
        break;

    case \'onResourceDuplicate\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }

        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        if (!$seoKeywords) {
            $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        }
        $newSeoKeywords = $modx->newObject(\'seoKeywords\');
        $newSeoKeywords->fromArray($seoKeywords->toArray());
        $newSeoKeywords->set(\'resource\', $newResource->get(\'id\'));
        $newSeoKeywords->save();
        break;

    case \'OnLoadWebDocument\':
        if ($modx->context->get(\'key\') == "mgr") {
            break;
        }
        $template = ($modx->resource->get(\'template\')) ? (string)$modx->resource->get(\'template\') : \'\';
        if (in_array($template, $disabledTemplates)) {
            break;
        }
        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $modx->resource->get(\'id\')));
        if ($seoKeywords) {
            $keyWords = $seoKeywords->get(\'keywords\');
            $modx->setPlaceholder(\'seoPro.keywords\', $keyWords);
        }
        $siteBranding = (boolean) $modx->getOption(\'seopro.allowbranding\', null, true);
        $siteDelimiter = $modx->getOption(\'seopro.delimiter\', null, \'/\');
        $siteUseSitename = (boolean) $modx->getOption(\'seopro.usesitename\', null, true);
        $siteID = $modx->resource->get(\'id\');
        $siteName = $modx->getOption(\'site_name\');
        $longtitle = $modx->resource->get(\'longtitle\');
        $pagetitle = $modx->resource->get(\'pagetitle\');
        $seoProTitle = array();
        if ($siteID == $modx->getOption(\'site_start\')) {
            $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $siteName;
        } else {
            $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $pagetitle;
            if ($siteUseSitename) {
                $seoProTitle[\'delimiter\'] = $siteDelimiter;
                $seoProTitle[\'sitename\'] = $siteName;
            }
        }
        $modx->setPlaceholder(\'seoPro.title\', implode(" ", $seoProTitle));
        if ($siteBranding) {
            $modx->lexicon->load(\'seopro:default\');
            $modx->regClientStartupHTMLBlock(\'<!-- \' . $modx->lexicon(\'seopro.branding_text\') . \'-->\');
        }
        break;
}',
    ),
  ),
  'df4812ca137859ee3187c010c8b5bbf3' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 7,
      'event' => 'OnDocFormRender',
    ),
    'object' => 
    array (
      'pluginid' => 7,
      'event' => 'OnDocFormRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '036fd61f578ddde0e9c0f112173c7f34' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 7,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 7,
      'event' => 'OnDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '457cb56744f7e83b6f24ae84e9fe02f1' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 7,
      'event' => 'OnResourceDuplicate',
    ),
    'object' => 
    array (
      'pluginid' => 7,
      'event' => 'OnResourceDuplicate',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '23fbea1190f128e6a4de73ea89ec9a39' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 7,
      'event' => 'OnLoadWebDocument',
    ),
    'object' => 
    array (
      'pluginid' => 7,
      'event' => 'OnLoadWebDocument',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);