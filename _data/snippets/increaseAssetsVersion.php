id: 8
source: 2
name: increaseAssetsVersion
category: 'Snippets and Output-Filters'
properties: 'a:0:{}'

-----

/**
 * increaseAssetsVersion snippet for dashboard-widget
 *
 * Copyright 2017 by Quadro - Jan Dähne info@quadro-system.de
 * Created on 12-14-2017
 */


// Returns an empty string if user shouldn't see the widget
$groups = $modx->getOption('groups', $scriptProperties, 'Administrator', true);
if (strpos($groups, ',') !== false) {
	$groups = explode(',', $groups);
}
if (!$modx->user->isMember($groups)) {
	return '';
}


// get current version number
$assetsVersion = $modx->getOption('project.assets_version');

if (!empty($_POST["increaseAssetsVersion"])) { 

    // increase version number
    $version = explode('.', $assetsVersion);
    $version[count($a)+1]++;
    
    $assetsVersion = implode('.', $version);
    
    $setting = $modx->getObject('modSystemSetting', 'project.assets_version');
    $setting->set('value', $assetsVersion);
    $setting->save();
    
    $cacheRefreshOptions =  array( 'system_settings' => array());
    $modx->cacheManager-> refresh($cacheRefreshOptions);
}


echo'
<form method="post" action="">
	<p>
		Aktuelle Version: '.$assetsVersion.'<br>
	</p><br>
	<input class="x-btn x-btn-small x-btn-icon-small-left primary-button x-btn-noicon" type="submit" name="increaseAssetsVersion" value="Versionsnummer erhöhen">
</form>';