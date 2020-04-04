<?php return array (
  '6121370564ff1aa12b2be4243bd506d2' => 
  array (
    'criteria' => 
    array (
      'name' => 'seopro',
    ),
    'object' => 
    array (
      'name' => 'seopro',
      'path' => '{core_path}components/seopro/',
      'assets_path' => '',
    ),
  ),
  '2b3d1f98d79a9c75a7c5504368771940' => 
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
  '3a1b50e315fe51b90504fc83e3d9d1af' => 
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
  '56e0d5fa98c70b8b6d72ba9d670a6408' => 
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
  '7527cb1bba942e2f36cec912894339cd' => 
  array (
    'criteria' => 
    array (
      'key' => 'seopro.allowbranding',
    ),
    'object' => 
    array (
      'key' => 'seopro.allowbranding',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'seopro',
      'area' => 'general',
      'editedon' => '2016-04-22 17:36:51',
    ),
  ),
  'cefb327f51aa8ae6a9c7abc3710a774e' => 
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
  '746934fe3e660619df58bb8ceec6d8b0' => 
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
      'description' => 'seoPro 1.0.4-pl . SEO optimizing plugin for MODx Revolution',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * The base seoPro snippet.
 *
 * @package seopro
 */
$seoPro = $modx->getService(\'seopro\', \'seoPro\', $modx->getOption(\'seopro.core_path\', null, $modx->getOption(\'core_path\') . \'components/seopro/\') . \'model/seopro/\', $scriptProperties);
if (!($seoPro instanceof seoPro))
  return \'\';

$disabledTemplates = explode(\',\', $modx->getOption(\'seopro.disabledtemplates\', null, \'0\'));

switch ($modx->event->name) {
  case \'OnDocFormRender\':
    $template = ($resource->get(\'template\')) ? (string)$resource->get(\'template\') : (string)$_REQUEST[\'template\'];
    if (in_array($template, $disabledTemplates)) {
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
    $template = ($resource->get(\'template\')) ? (string)$resource->get(\'template\') : (string)$_REQUEST[\'template\'];
    if (in_array($template, $disabledTemplates)) {
      break;
    }
    $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
    if (!$seoKeywords && isset($resource)) {
      $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
    }
    if($seoKeywords){
      $seoKeywords->set(\'keywords\', trim($_POST[\'keywords\'], \',\'));
      $seoKeywords->save();
    }
    break;

  case \'onResourceDuplicate\':
    $template = ($resource->get(\'template\')) ? (string)$resource->get(\'template\') : (string)$_REQUEST[\'template\'];
    if (in_array($template, $disabledTemplates)) {
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
    $template = ($modx->resource->get(\'template\')) ? (string)$modx->resource->get(\'template\') : (string)$_REQUEST[\'template\'];
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
      $modx->regClientStartupHTMLBlock(\'<!-- This site is optimized with the Sterc seoPro plugin \' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\') . \' - http://www.sterc.nl/modx/seopro -->\');
    }
    break;
}',
      'locked' => 0,
      'properties' => NULL,
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
if (!($seoPro instanceof seoPro))
  return \'\';

$disabledTemplates = explode(\',\', $modx->getOption(\'seopro.disabledtemplates\', null, \'0\'));

switch ($modx->event->name) {
  case \'OnDocFormRender\':
    $template = ($resource->get(\'template\')) ? (string)$resource->get(\'template\') : (string)$_REQUEST[\'template\'];
    if (in_array($template, $disabledTemplates)) {
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
    $template = ($resource->get(\'template\')) ? (string)$resource->get(\'template\') : (string)$_REQUEST[\'template\'];
    if (in_array($template, $disabledTemplates)) {
      break;
    }
    $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
    if (!$seoKeywords && isset($resource)) {
      $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
    }
    if($seoKeywords){
      $seoKeywords->set(\'keywords\', trim($_POST[\'keywords\'], \',\'));
      $seoKeywords->save();
    }
    break;

  case \'onResourceDuplicate\':
    $template = ($resource->get(\'template\')) ? (string)$resource->get(\'template\') : (string)$_REQUEST[\'template\'];
    if (in_array($template, $disabledTemplates)) {
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
    $template = ($modx->resource->get(\'template\')) ? (string)$modx->resource->get(\'template\') : (string)$_REQUEST[\'template\'];
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
      $modx->regClientStartupHTMLBlock(\'<!-- This site is optimized with the Sterc seoPro plugin \' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\') . \' - http://www.sterc.nl/modx/seopro -->\');
    }
    break;
}',
    ),
  ),
  'c224d4391138701532b802d75162ec8b' => 
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
  '7cc4f83d123e48da1f4abaaed661f6c8' => 
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
  '70e672f62df8625e4da5a7f1f9213117' => 
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
  '3577fc1cc3d9ca9dc879d72069df4749' => 
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