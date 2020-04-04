<?php return array (
  'a4c180a72ac65e896f20014c01395a44' => 
  array (
    'criteria' => 
    array (
      'name' => 'upgrademodx',
    ),
    'object' => 
    array (
      'name' => 'upgrademodx',
      'path' => '{core_path}components/upgrademodx/',
      'assets_path' => '{assets_path}components/upgrademodx/',
    ),
  ),
  '0cda8243be8a385e7786a06bb247663e' => 
  array (
    'criteria' => 
    array (
      'name' => 'Upgrade MODX',
    ),
    'object' => 
    array (
      'id' => 9,
      'name' => 'Upgrade MODX',
      'description' => 'Upgrade MODX Widget',
      'type' => 'snippet',
      'content' => 'UpgradeMODXWidget',
      'namespace' => 'upgrademodx',
      'lexicon' => 'upgrademodx:default',
      'size' => 'half',
      'name_trans' => 'Upgrade MODX',
      'description_trans' => 'Upgrade MODX Widget',
    ),
  ),
  'face69d81c332d2019c993911e766ccf' => 
  array (
    'criteria' => 
    array (
      'category' => 'UpgradeMODX',
    ),
    'object' => 
    array (
      'id' => 5,
      'parent' => 0,
      'category' => 'UpgradeMODX',
      'rank' => 0,
    ),
  ),
  '91a522bb4d4df424a939f1601d6adb20' => 
  array (
    'criteria' => 
    array (
      'name' => 'UpgradeMODXTpl',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'UpgradeMODXTpl',
      'description' => 'Tpl chunk for alert widget',
      'editor_type' => 0,
      'category' => 5,
      'cache_type' => 0,
      'snippet' => '<h3 style="color:[[+ugm_notice_color]]">[[+ugm_notice]]</h3>
<br/>[[+ugm_current_version_caption]]: [[+ugm_current_version]]
<br/>[[+ugm_latest_version_caption]]: [[+ugm_latest_version]]

[[+ugm_logout_note]]
[[+ugm_form]]
[[+ugm_errors]]
<p>&nbsp;</p>

',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<h3 style="color:[[+ugm_notice_color]]">[[+ugm_notice]]</h3>
<br/>[[+ugm_current_version_caption]]: [[+ugm_current_version]]
<br/>[[+ugm_latest_version_caption]]: [[+ugm_latest_version]]

[[+ugm_logout_note]]
[[+ugm_form]]
[[+ugm_errors]]
<p>&nbsp;</p>

',
    ),
  ),
  '8f0e9bcacb9534793556402f2d58f796' => 
  array (
    'criteria' => 
    array (
      'name' => 'UpgradeMODXWidget',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'UpgradeMODXWidget',
      'description' => 'Upgrade MODX Dashboard widget',
      'editor_type' => 0,
      'category' => 5,
      'cache_type' => 0,
      'snippet' => '/**
 * UpgradeMODXWidget snippet for UpgradeMODX extra
 *
 * Copyright 2015-2018 Bob Ray <https://bobsguides.com>
 * Created on 08-16-2015
 *
 * UpgradeMODX is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * UpgradeMODX is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * UpgradeMODX; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package upgrademodx
 */

/**
 * Description
 * -----------
 * UpgradeMODX Dashboard widget
 * This package was inspired by the work of a number of people and I have borrowed some of their code.
 * Dmytro Lukianenko (dmi3yy) is the original author of the MODX install script. Susan Sottwell, Sharapov,
 * Bumkaka, Inreti, Zaigham Rana, frischnetz, and AgelxNash, also contributed and I\'d like to thank all
 * of them for laying the groundwork.
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package upgrademodx
 **/

/* Properties

 * @property &groups textfield -- group, or commma-separated list of groups, who will see the widget; Default: (empty)..
 * @property &hideWhenNoUpgrade combo-boolean -- Hide widget when no upgrade is available; Default: No.
 * @property &interval textfield -- Interval between checks -- Examples: 1 week, 3 days, 6 hours; Default: 1 week.
 * @property &language textfield -- Two-letter code of language to user; Default: en.
 * @property &lastCheck textfield -- Date and time of last check -- set automatically; Default: (empty)..
 * @property &latestVersion textfield -- Latest version (at last check) -- set automatically; Default: (empty)..
 * @property &plOnly combo-boolean -- Show only pl (stable) versions; Default: yes.
 * @property &versionsToShow textfield -- Number of versions to show in upgrade form (not widget); Default: 5.

 */

/** recursive remove dir function.
 *  Removes a directory and all its children */

function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir . "/" . $object) == "dir") {
                    $prefix = substr($object, 0, 4);
                    $this->rrmdir($dir . "/" . $object);
                } else {
                    $prefix = substr($object, 0, 4);
                    if ($prefix != \'.git\' && $prefix != \'.svn\') {
                        @unlink($dir . "/" . $object);
                    }
                }
            }
        }
        reset($objects);
        $success = @rmdir($dir);
    }
}


if (php_sapi_name() === \'cli\') {
    /* This section for debugging during development. It won\'t execute in MODX */
    include \'C:\\xampp\\htdocs\\addons\\assets\\mycomponents\\instantiatemodx\\instantiatemodx.php\';
    $snippet =
    $scriptProperties = array(
        \'versionsToShow\' => 5,
        \'hideWhenNoUpgrade\' => false,
        \'lastCheck\' => \'\',
        \'interval\' => \'+60 seconds\',
        \'plOnly\' => false,
        \'language\' => \'en\',
        \'forcePclZip\' => false,
        \'forceFopen\' => false,
        \'currentVersion\' => $modx->getOption(\'settings_version\'),
        \'latestVersion\' => \'2.4.3-pl\',
        \'githubTimeout\' => 6,
        \'modTimeout\' => 6,
        \'tries\' => 2,
    );

} else {
    /* This will execute when in MODX */
    $language = $modx->getOption(\'language\', $scriptProperties, \'en\', true);
    $modx->lexicon->load($language . \':upgrademodx:default\');
    /* Return empty string if user shouldn\'t see widget */

    $groups = $modx->getOption(\'groups\', $scriptProperties, \'Administrator\', true);
    if (strpos($groups, \',\') !== false) {
        $groups = explode(\',\', $groups);
    }
    if (! $modx->user->isMember($groups)) {
        return \'\';
    }
}

$props = $scriptProperties;
$corePath = $modx->getOption(\'ugm.core_path\', $props, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/upgrademodx/\');

require_once($corePath . \'model/upgrademodx.class.php\');


$upgrade = new UpgradeMODX($modx);
$upgrade->init($props);

/* See if user has submitted the form. If so, create the upgrade script and launch it */
if (isset($_POST[\'UpgradeMODX\'])) {
    $upgrade->writeScriptFile();
    /* Log out all users before launching the form */
    $sessionTable = $modx->getTableName(\'modSession\');
    if ($modx->query("TRUNCATE TABLE {$sessionTable}") == false) {
        $flushed = false;
    } else {
        $modx->user->endSession();
    }
    $modx->sendRedirect(MODX_BASE_URL . \'upgrade.php\');

}

/* Set the method */
$forceFopen = $modx->getOption(\'forceFopen\', $props, false, true);
$method = null;
if (extension_loaded(\'curl\') && (!$forceFopen)) {
    $method = \'curl\';
} elseif (ini_get(\'allow_url_fopen\')) {
    $method = \'fopen\';
} else {
    die($this->modx->lexicon(\'ugm_no_curl_no_fopen\'));
}

$lastCheck = $modx->getOption(\'lastCheck\', $props, \'2015-08-17 00:00:004\', true);
$interval = $modx->getOption(\'interval\', $props, \'+1 week\', true);
$interval = \'+1 week\';
$hideWhenNoUpgrade = $modx->getOption(\'hideWhenNoUpgrade\', $props, false, true);
$plOnly = $modx->getOption(\'plOnly\', $props);
$versionsToShow = $modx->getOption(\'versionsToShow\', $props, 5);
$currentVersion = $modx->getOption(\'settings_version\');
$latestVersion = $modx->getOption(\'latestVersion\', $props, \'\', true);
$versionListPath = $upgrade->getVersionListPath();

$versionListExists = false;

$fullVersionListPath = $versionListPath . \'versionlist\';
if (file_exists($fullVersionListPath)) {
    $v = file_get_contents($fullVersionListPath);
    if (! empty($v)) {
        $versionListExists = true;
    }
}

$timeToCheck = $upgrade->timeToCheck($lastCheck, $interval);
/* Perform check if no versionlist or latestVersion, or if it\'s time to check */
if ((!$versionListExists ) || $timeToCheck || empty($latestVersion)) {
    $upgradeAvailable = $upgrade->upgradeAvailable($currentVersion, $plOnly, $versionsToShow, $method);
    $latestVersion = $upgrade->getLatestVersion();
} else {
    $upgradeAvailable = version_compare($currentVersion, $latestVersion) < 0;;
}
$placeholders = array();
$placeholders[\'[[+ugm_current_version]]\'] = $currentVersion;
$placeholders[\'[[+ugm_latest_version]]\'] = $latestVersion;

$errors = $upgrade->getErrors();

if (!empty($errors)) {
    $msg = \'\';
    foreach ($errors as $error) {
        $msg .= \'<br/><span style="color:red">\' . $modx->lexicon(\'ugm_error\') .
            \': \' . $error . \'</span>\';
    }

    /* attempt to delete any files created */
    rrmdir(MODX_BASE_PATH . \'ugmtemp\');

    if (file_exists(MODX_BASE_PATH . \'modx.zip\')) {
        @unlink(MODX_BASE_PATH . \'modx.zip\');
    }
    if (file_exists(MODX_BASE_PATH . \'upgrade.php\')) {
        @unlink(MODX_BASE_PATH . \'upgrade.php\');
    }


    return $msg;
}

$placeholders[\'[[+ugm_current_version_caption]]\'] = $modx->lexicon(\'ugm_current_version_caption\');
$placeholders[\'[[+ugm_latest_version_caption]]\'] = $modx->lexicon(\'ugm_latest_version_caption\');

/* See if there\'s a new version and if it\'s downloadable */
if ($upgradeAvailable) {
    $placeholders[\'[[+ugm_notice]]\'] = $modx->lexicon(\'ugm_upgrade_available\');
    $placeholders[\'[[+ugm_notice_color]]\'] = \'green\';
    $placeholders[\'[[+ugm_logout_note]]\'] = \'<br/><br/>(\' .
        $modx->lexicon(\'ugm_logout_note\')
        . \')\';
    $placeholders[\'[[+ugm_form]]\'] = \'<br/><br/>
        <form method="post" action="">
           <input class="x-btn x-btn-small x-btn-icon-small-left primary-button x-btn-noicon"
                    type="submit" name="UpgradeMODX" value="\' . $modx->lexicon(\'ugm_upgrade_modx\') .  \'">
        </form>\';

} else {
    if ($hideWhenNoUpgrade) {
        return \'\';
    } else {
        $placeholders[\'[[+ugm_notice]]\'] = $modx->lexicon(\'ugm_modx_up_to_date\');
        $placeholders[\'[[+ugm_notice_color]]\'] = \'gray\';
    }
}

/* Get Tpl */

$tpl = $modx->getChunk(\'UpgradeMODXTpl\');

/* Do the replacements */
$tpl = str_replace(array_keys($placeholders), array_values($placeholders), $tpl);

if (php_sapi_name() === \'cli\') {
    echo $tpl;
}

return $tpl;',
      'locked' => 0,
      'properties' => 'a:17:{s:8:"attempts";a:7:{s:4:"name";s:8:"attempts";s:4:"desc";s:17:"ubm_attempts_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"2";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:8:"Download";}s:10:"forceFopen";a:7:{s:4:"name";s:10:"forceFopen";s:4:"desc";s:19:"ugm_forceFopen_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:8:"Download";}s:11:"forcePclZip";a:7:{s:4:"name";s:11:"forcePclZip";s:4:"desc";s:20:"ugm_forcePclZip_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:8:"Download";}s:11:"modxTimeout";a:7:{s:4:"name";s:11:"modxTimeout";s:4:"desc";s:21:"ugm_modx_timeout_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"6";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:8:"Download";}s:15:"ssl_verify_peer";a:7:{s:4:"name";s:15:"ssl_verify_peer";s:4:"desc";s:24:"ugm_ssl_verify_peer_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:8:"Download";}s:8:"language";a:7:{s:4:"name";s:8:"language";s:4:"desc";s:17:"ugm_language_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:2:"en";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:4:"Form";}s:6:"plOnly";a:7:{s:4:"name";s:6:"plOnly";s:4:"desc";s:15:"ugm_plOnly_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:4:"Form";}s:14:"versionsToShow";a:7:{s:4:"name";s:14:"versionsToShow";s:4:"desc";s:23:"ugm_versionsToShow_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"5";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:4:"Form";}s:13:"githubTimeout";a:7:{s:4:"name";s:13:"githubTimeout";s:4:"desc";s:23:"ugm_github_timeout_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"6";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:6:"GitHub";}s:12:"github_token";a:7:{s:4:"name";s:12:"github_token";s:4:"desc";s:21:"ugm_github_token_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:6:"GitHub";}s:15:"github_username";a:7:{s:4:"name";s:15:"github_username";s:4:"desc";s:24:"ugm_github_username_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:6:"GitHub";}s:6:"groups";a:7:{s:4:"name";s:6:"groups";s:4:"desc";s:15:"ugm_groups_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:13:"Administrator";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:8:"Security";}s:17:"hideWhenNoUpgrade";a:7:{s:4:"name";s:17:"hideWhenNoUpgrade";s:4:"desc";s:26:"ugm_hideWhenNoUpgrade_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:6:"Widget";}s:8:"interval";a:7:{s:4:"name";s:8:"interval";s:4:"desc";s:17:"ugm_interval_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"1 week";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:6:"Widget";}s:9:"lastCheck";a:7:{s:4:"name";s:9:"lastCheck";s:4:"desc";s:18:"ugm_lastCheck_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:19:"2018-11-08 08:45:48";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:6:"Widget";}s:13:"latestVersion";a:7:{s:4:"name";s:13:"latestVersion";s:4:"desc";s:22:"ugm_latestVersion_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"2.6.5-pl";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:6:"Widget";}s:15:"versionListPath";a:7:{s:4:"name";s:15:"versionListPath";s:4:"desc";s:26:"ugm_version_list_path_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:29:"{core_path}cache/upgrademodx/";s:7:"lexicon";s:22:"upgrademodx:properties";s:4:"area";s:6:"Widget";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * UpgradeMODXWidget snippet for UpgradeMODX extra
 *
 * Copyright 2015-2018 Bob Ray <https://bobsguides.com>
 * Created on 08-16-2015
 *
 * UpgradeMODX is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * UpgradeMODX is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * UpgradeMODX; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package upgrademodx
 */

/**
 * Description
 * -----------
 * UpgradeMODX Dashboard widget
 * This package was inspired by the work of a number of people and I have borrowed some of their code.
 * Dmytro Lukianenko (dmi3yy) is the original author of the MODX install script. Susan Sottwell, Sharapov,
 * Bumkaka, Inreti, Zaigham Rana, frischnetz, and AgelxNash, also contributed and I\'d like to thank all
 * of them for laying the groundwork.
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package upgrademodx
 **/

/* Properties

 * @property &groups textfield -- group, or commma-separated list of groups, who will see the widget; Default: (empty)..
 * @property &hideWhenNoUpgrade combo-boolean -- Hide widget when no upgrade is available; Default: No.
 * @property &interval textfield -- Interval between checks -- Examples: 1 week, 3 days, 6 hours; Default: 1 week.
 * @property &language textfield -- Two-letter code of language to user; Default: en.
 * @property &lastCheck textfield -- Date and time of last check -- set automatically; Default: (empty)..
 * @property &latestVersion textfield -- Latest version (at last check) -- set automatically; Default: (empty)..
 * @property &plOnly combo-boolean -- Show only pl (stable) versions; Default: yes.
 * @property &versionsToShow textfield -- Number of versions to show in upgrade form (not widget); Default: 5.

 */

/** recursive remove dir function.
 *  Removes a directory and all its children */

function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir . "/" . $object) == "dir") {
                    $prefix = substr($object, 0, 4);
                    $this->rrmdir($dir . "/" . $object);
                } else {
                    $prefix = substr($object, 0, 4);
                    if ($prefix != \'.git\' && $prefix != \'.svn\') {
                        @unlink($dir . "/" . $object);
                    }
                }
            }
        }
        reset($objects);
        $success = @rmdir($dir);
    }
}


if (php_sapi_name() === \'cli\') {
    /* This section for debugging during development. It won\'t execute in MODX */
    include \'C:\\xampp\\htdocs\\addons\\assets\\mycomponents\\instantiatemodx\\instantiatemodx.php\';
    $snippet =
    $scriptProperties = array(
        \'versionsToShow\' => 5,
        \'hideWhenNoUpgrade\' => false,
        \'lastCheck\' => \'\',
        \'interval\' => \'+60 seconds\',
        \'plOnly\' => false,
        \'language\' => \'en\',
        \'forcePclZip\' => false,
        \'forceFopen\' => false,
        \'currentVersion\' => $modx->getOption(\'settings_version\'),
        \'latestVersion\' => \'2.4.3-pl\',
        \'githubTimeout\' => 6,
        \'modTimeout\' => 6,
        \'tries\' => 2,
    );

} else {
    /* This will execute when in MODX */
    $language = $modx->getOption(\'language\', $scriptProperties, \'en\', true);
    $modx->lexicon->load($language . \':upgrademodx:default\');
    /* Return empty string if user shouldn\'t see widget */

    $groups = $modx->getOption(\'groups\', $scriptProperties, \'Administrator\', true);
    if (strpos($groups, \',\') !== false) {
        $groups = explode(\',\', $groups);
    }
    if (! $modx->user->isMember($groups)) {
        return \'\';
    }
}

$props = $scriptProperties;
$corePath = $modx->getOption(\'ugm.core_path\', $props, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/upgrademodx/\');

require_once($corePath . \'model/upgrademodx.class.php\');


$upgrade = new UpgradeMODX($modx);
$upgrade->init($props);

/* See if user has submitted the form. If so, create the upgrade script and launch it */
if (isset($_POST[\'UpgradeMODX\'])) {
    $upgrade->writeScriptFile();
    /* Log out all users before launching the form */
    $sessionTable = $modx->getTableName(\'modSession\');
    if ($modx->query("TRUNCATE TABLE {$sessionTable}") == false) {
        $flushed = false;
    } else {
        $modx->user->endSession();
    }
    $modx->sendRedirect(MODX_BASE_URL . \'upgrade.php\');

}

/* Set the method */
$forceFopen = $modx->getOption(\'forceFopen\', $props, false, true);
$method = null;
if (extension_loaded(\'curl\') && (!$forceFopen)) {
    $method = \'curl\';
} elseif (ini_get(\'allow_url_fopen\')) {
    $method = \'fopen\';
} else {
    die($this->modx->lexicon(\'ugm_no_curl_no_fopen\'));
}

$lastCheck = $modx->getOption(\'lastCheck\', $props, \'2015-08-17 00:00:004\', true);
$interval = $modx->getOption(\'interval\', $props, \'+1 week\', true);
$interval = \'+1 week\';
$hideWhenNoUpgrade = $modx->getOption(\'hideWhenNoUpgrade\', $props, false, true);
$plOnly = $modx->getOption(\'plOnly\', $props);
$versionsToShow = $modx->getOption(\'versionsToShow\', $props, 5);
$currentVersion = $modx->getOption(\'settings_version\');
$latestVersion = $modx->getOption(\'latestVersion\', $props, \'\', true);
$versionListPath = $upgrade->getVersionListPath();

$versionListExists = false;

$fullVersionListPath = $versionListPath . \'versionlist\';
if (file_exists($fullVersionListPath)) {
    $v = file_get_contents($fullVersionListPath);
    if (! empty($v)) {
        $versionListExists = true;
    }
}

$timeToCheck = $upgrade->timeToCheck($lastCheck, $interval);
/* Perform check if no versionlist or latestVersion, or if it\'s time to check */
if ((!$versionListExists ) || $timeToCheck || empty($latestVersion)) {
    $upgradeAvailable = $upgrade->upgradeAvailable($currentVersion, $plOnly, $versionsToShow, $method);
    $latestVersion = $upgrade->getLatestVersion();
} else {
    $upgradeAvailable = version_compare($currentVersion, $latestVersion) < 0;;
}
$placeholders = array();
$placeholders[\'[[+ugm_current_version]]\'] = $currentVersion;
$placeholders[\'[[+ugm_latest_version]]\'] = $latestVersion;

$errors = $upgrade->getErrors();

if (!empty($errors)) {
    $msg = \'\';
    foreach ($errors as $error) {
        $msg .= \'<br/><span style="color:red">\' . $modx->lexicon(\'ugm_error\') .
            \': \' . $error . \'</span>\';
    }

    /* attempt to delete any files created */
    rrmdir(MODX_BASE_PATH . \'ugmtemp\');

    if (file_exists(MODX_BASE_PATH . \'modx.zip\')) {
        @unlink(MODX_BASE_PATH . \'modx.zip\');
    }
    if (file_exists(MODX_BASE_PATH . \'upgrade.php\')) {
        @unlink(MODX_BASE_PATH . \'upgrade.php\');
    }


    return $msg;
}

$placeholders[\'[[+ugm_current_version_caption]]\'] = $modx->lexicon(\'ugm_current_version_caption\');
$placeholders[\'[[+ugm_latest_version_caption]]\'] = $modx->lexicon(\'ugm_latest_version_caption\');

/* See if there\'s a new version and if it\'s downloadable */
if ($upgradeAvailable) {
    $placeholders[\'[[+ugm_notice]]\'] = $modx->lexicon(\'ugm_upgrade_available\');
    $placeholders[\'[[+ugm_notice_color]]\'] = \'green\';
    $placeholders[\'[[+ugm_logout_note]]\'] = \'<br/><br/>(\' .
        $modx->lexicon(\'ugm_logout_note\')
        . \')\';
    $placeholders[\'[[+ugm_form]]\'] = \'<br/><br/>
        <form method="post" action="">
           <input class="x-btn x-btn-small x-btn-icon-small-left primary-button x-btn-noicon"
                    type="submit" name="UpgradeMODX" value="\' . $modx->lexicon(\'ugm_upgrade_modx\') .  \'">
        </form>\';

} else {
    if ($hideWhenNoUpgrade) {
        return \'\';
    } else {
        $placeholders[\'[[+ugm_notice]]\'] = $modx->lexicon(\'ugm_modx_up_to_date\');
        $placeholders[\'[[+ugm_notice_color]]\'] = \'gray\';
    }
}

/* Get Tpl */

$tpl = $modx->getChunk(\'UpgradeMODXTpl\');

/* Do the replacements */
$tpl = str_replace(array_keys($placeholders), array_values($placeholders), $tpl);

if (php_sapi_name() === \'cli\') {
    echo $tpl;
}

return $tpl;',
    ),
  ),
);