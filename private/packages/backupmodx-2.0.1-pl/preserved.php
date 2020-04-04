<?php return array (
  'e22eb7bc89867792aee422bd4f9a12ed' => 
  array (
    'criteria' => 
    array (
      'name' => 'backupmodx',
    ),
    'object' => 
    array (
      'name' => 'backupmodx',
      'path' => '{core_path}components/backupmodx/',
      'assets_path' => '{assets_path}components/backupmodx/',
    ),
  ),
  '14564e7dadd27b0e1019825798fd3bde' => 
  array (
    'criteria' => 
    array (
      'category' => 'BackupMODX',
    ),
    'object' => 
    array (
      'id' => 1,
      'parent' => 0,
      'category' => 'BackupMODX',
      'rank' => 0,
    ),
  ),
  '81e469d37cdc7a80ae053ae74cdf5164' => 
  array (
    'criteria' => 
    array (
      'name' => 'BackupMODXWidget',
    ),
    'object' => 
    array (
      'id' => 1,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'BackupMODXWidget',
      'description' => 'Backup MODX Dashboard widget',
      'editor_type' => 0,
      'category' => 1,
      'cache_type' => 0,
      'snippet' => '/**
 * BackupMODXWidget snippet for backupmodx extra
 *
 * Copyright 2015 by Quadro - Jan Dähne info@quadro-system.de
 * Created on 12-16-2015
 *
 * backupmodx is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * backupmodx is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * backupmodx; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package backupmodx
 */

/**
 * Description
 * -----------
 * Backup MODX Dashboard widget
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package backupmodx
 **/


// Returns an empty string if user shouldn\'t see the widget
$groups = $modx->getOption(\'groups\', $scriptProperties, \'Administrator\', true);
if (strpos($groups, \',\') !== false) {
	$groups = explode(\',\', $groups);
}
if (!$modx->user->isMember($groups)) {
	return \'\';
}


//Check if server supports shell-commands
if (!shell_exec("type type")) { return \'Your server does not support shell-commands. Backup not possible.\'; }


$config = $modx->getConfig();

//Get Properties
$tarAlias = $modx->getOption(\'tarAlias\', $scriptProperties, \'tar\', true); //some websites may need a different alias for tar
$excludes = $modx->getOption(\'excludes\', $scriptProperties);
$targetPath = str_replace("{assets_path}", MODX_ASSETS_PATH, $modx->getOption(\'targetPath\', $scriptProperties)); //directory to place the backup
$targetPath = rtrim($targetPath, \'/\').\'/backup\'; //removing trailing slash and adding backup-folder



if(!function_exists(fileLink)) {
    function fileLink($file, $title) {
        $file_root = MODX_BASE_PATH.str_replace(MODX_BASE_PATH, "", $file);
        $file_absolute = MODX_SITE_URL.str_replace(MODX_BASE_PATH, "", $file);

        $size = round(filesize($file) / 1000000, 2);

        if (file_exists($file_root)){
            $file = \'<a href="\'.$file_absolute.\'" target="_blank" download>\'.basename($file).\'</a>\';
        }else {
            $file = basename($file);
        }
        
        return \'<span style="display: inline-block; width: 90px;">\'.$title.\':</span>\'.$file.\' (\'.$size.\' MB)\';
    }
}


if (isset($_POST[\'backupMODX\'])) {

	set_time_limit(0);
	ini_set(\'max_execution_time\', 0);

	if (!empty($_POST["mysql"]) or !empty($_POST["files"])){
		$base_path = MODX_BASE_PATH;
		$core_path = MODX_CORE_PATH;
		$date = date("Ymd-His");
		$dbase = $modx->getOption(\'dbname\');
		$database_server = $config[host];
		$database_user = $config[username];
		$database_password = $config[password];
		$targetSql = "{$targetPath}/{$dbase}_{$date}_mysql.sql";
		$targetTar = "{$targetPath}/{$dbase}_{$date}_files.tar";
		$targetCom = "{$targetPath}/{$dbase}_{$date}_combined.tar";
		$targetTxt = "{$targetPath}/{$dbase}_{$date}_readme.txt";


		//Create Folder
		system("mkdir $targetPath");
		
		
        //Create Readme
        if (!empty($_POST["note"])){
            $fp = fopen($targetTxt,"wb");
            fwrite($fp,$_POST["note"]);
            fclose($fp);
        }
        
		
		//MySQL- Backup
		if (!empty($_POST["mysql"])){
			
			system("mysqldump --host=$database_server --user=$database_user --password=$database_password --databases $dbase --no-create-db --default-character-set=utf8 --result-file={$targetSql}");
			
			//If no mysqldump was possible try:
			if (file_exists($targetSql) or filesize($targetSql) <= 0) {
				system(sprintf(\'mysqldump --no-tablespaces --opt -h%s -u%s -p"%s" %s --result-file=%s\', $database_server, $database_user, $database_password, $dbase, $targetSql));
			}
		}
		
		//File-Backup
		if (!empty($_POST["files"])){
		    
		    //creating exclude-files command
		    if (!empty($excludes)) {
		        $excludes_array = explode(",", $excludes);
		        unset($excludes);
		        foreach ($excludes_array as $exclude){
		            $excludes .= \' --exclude=\'.$exclude;
		        }
		    }
		    
		    //tar files
			system("$tarAlias cf {$targetTar} --exclude=$targetPath --exclude={$core_path}cache/* {$excludes} $base_path $core_path");
			
			//If a note exists add it to the tar-archive
			if (file_exists($targetTxt)) {
			    system("$tarAlias uf {$targetTar} -C $targetPath {$dbase}_{$date}_readme.txt"); //adding note in the root
			}
		}
		
		
		//Combine SQL and Files in one archive
		if (file_exists($targetSql) and file_exists($targetTar) and filesize($targetSql) > 0) {
			system("cp {$targetTar} {$targetCom}"); //copy files-archive
			system("$tarAlias uf {$targetCom} -C $targetPath {$dbase}_{$date}_mysql.sql"); //adding sql-file in the root
		}
		
		$backup = true;

		//Output
		if (file_exists($targetSql) and filesize($targetSql) > 0) {
			$mysql_link = fileLink($targetSql, \'MySQL\');
		}else {
		    $mysql_link = \'<span style="display: inline-block; width: 90px;">MySQL:</span>No Backup!\';
		}
		if (file_exists($targetTar)) {
			$files_link = fileLink($targetTar, \'Files\');
		}else {
		    $files_link = \'<span style="display: inline-block; width: 90px;">Files:</span>No Backup!\';
		}
		if (file_exists($targetCom)) {
			$combi_link = fileLink($targetCom, \'MySQL & Files\');
		}
		
	}
}




//Remove Backups
if (!empty($_POST["removeBackup"])){
	if (!empty($_POST["removeBackup"])) {
		foreach(glob("$targetPath/*") as $file) {
			$extension = pathinfo($file, PATHINFO_EXTENSION);
			if (in_array($extension, array("tar", "sql", "txt"))) {
			    unlink($file);
			}
		}
		rmdir($targetPath);
	}
}




if ($backup != true) {

	echo \'
		<form method="post" action="">
			<p>
				Backup your MODX-Site:<br><br>
				<input type="checkbox" name="mysql" id="mysql" value="1" checked><label for="mysql"> MySQL Database</label><br />
				<input type="checkbox" name="files" id="files" value="1" checked><label for="files"> Files</label>
			</p>
			<br>
			<p>
				Folder to place files: <strong>\'.$targetPath.\'</strong> <span style="color: grey;">(Editable via Snippet-Properties)</span><br>
			</p><br>
			
			<p>Add a readme file: <span style="color: grey;">(txt-file placed in the root)</span></p>
			<textarea name="note" style="width:90%; height:40px; display: block; border: 1px solid #ccc; margin: 5px 0 20px 0; padding: 5px;" placeholder="place your notes here..."></textarea>
			
			<input class="x-btn x-btn-small x-btn-icon-small-left primary-button x-btn-noicon" type="submit" name="backupMODX" value="Backup Site!">
		</form>\';
}else {
	if ($backup == true) {
		echo\'
			<form method="post" action="">
				<h3 style="color:grey">Backup Finished!</h3>
				<p>
					\'.$mysql_link.\'<br>
					\'.$files_link.\'<br>
					\'.$combi_link.\'
				</p><br>
				<input class="x-btn x-btn-small x-btn-icon-small-left primary-button x-btn-noicon" type="submit" name="removeBackup" value="Remove Backups">
			</form>\';
	}
}',
      'locked' => 0,
      'properties' => 'a:4:{s:8:"excludes";a:7:{s:4:"name";s:8:"excludes";s:4:"desc";s:156:"file/folder, or comma-separated list of files/folders who will be excluded of the backup. Using file-path from the root. Example: /html/assets,/html/manager";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"groups";a:7:{s:4:"name";s:6:"groups";s:4:"desc";s:65:"group, or comma-separated list of groups, who will see the widget";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:13:"Administrator";s:7:"lexicon";s:21:"backupmodx:properties";s:4:"area";s:0:"";}s:8:"tarAlias";a:7:{s:4:"name";s:8:"tarAlias";s:4:"desc";s:51:"some server need an alias for tar like "/bin/pktar"";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"tar";s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"targetPath";a:7:{s:4:"name";s:10:"targetPath";s:4:"desc";s:144:"Directory of the backup files. No trailing slash! You can use {assets_path} as a placeholder for the assets folder. Example: {assets_path}folder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:13:"{assets_path}";s:7:"lexicon";N;s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * BackupMODXWidget snippet for backupmodx extra
 *
 * Copyright 2015 by Quadro - Jan Dähne info@quadro-system.de
 * Created on 12-16-2015
 *
 * backupmodx is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * backupmodx is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * backupmodx; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package backupmodx
 */

/**
 * Description
 * -----------
 * Backup MODX Dashboard widget
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package backupmodx
 **/


// Returns an empty string if user shouldn\'t see the widget
$groups = $modx->getOption(\'groups\', $scriptProperties, \'Administrator\', true);
if (strpos($groups, \',\') !== false) {
	$groups = explode(\',\', $groups);
}
if (!$modx->user->isMember($groups)) {
	return \'\';
}


//Check if server supports shell-commands
if (!shell_exec("type type")) { return \'Your server does not support shell-commands. Backup not possible.\'; }


$config = $modx->getConfig();

//Get Properties
$tarAlias = $modx->getOption(\'tarAlias\', $scriptProperties, \'tar\', true); //some websites may need a different alias for tar
$excludes = $modx->getOption(\'excludes\', $scriptProperties);
$targetPath = str_replace("{assets_path}", MODX_ASSETS_PATH, $modx->getOption(\'targetPath\', $scriptProperties)); //directory to place the backup
$targetPath = rtrim($targetPath, \'/\').\'/backup\'; //removing trailing slash and adding backup-folder



if(!function_exists(fileLink)) {
    function fileLink($file, $title) {
        $file_root = MODX_BASE_PATH.str_replace(MODX_BASE_PATH, "", $file);
        $file_absolute = MODX_SITE_URL.str_replace(MODX_BASE_PATH, "", $file);

        $size = round(filesize($file) / 1000000, 2);

        if (file_exists($file_root)){
            $file = \'<a href="\'.$file_absolute.\'" target="_blank" download>\'.basename($file).\'</a>\';
        }else {
            $file = basename($file);
        }
        
        return \'<span style="display: inline-block; width: 90px;">\'.$title.\':</span>\'.$file.\' (\'.$size.\' MB)\';
    }
}


if (isset($_POST[\'backupMODX\'])) {

	set_time_limit(0);
	ini_set(\'max_execution_time\', 0);

	if (!empty($_POST["mysql"]) or !empty($_POST["files"])){
		$base_path = MODX_BASE_PATH;
		$core_path = MODX_CORE_PATH;
		$date = date("Ymd-His");
		$dbase = $modx->getOption(\'dbname\');
		$database_server = $config[host];
		$database_user = $config[username];
		$database_password = $config[password];
		$targetSql = "{$targetPath}/{$dbase}_{$date}_mysql.sql";
		$targetTar = "{$targetPath}/{$dbase}_{$date}_files.tar";
		$targetCom = "{$targetPath}/{$dbase}_{$date}_combined.tar";
		$targetTxt = "{$targetPath}/{$dbase}_{$date}_readme.txt";


		//Create Folder
		system("mkdir $targetPath");
		
		
        //Create Readme
        if (!empty($_POST["note"])){
            $fp = fopen($targetTxt,"wb");
            fwrite($fp,$_POST["note"]);
            fclose($fp);
        }
        
		
		//MySQL- Backup
		if (!empty($_POST["mysql"])){
			
			system("mysqldump --host=$database_server --user=$database_user --password=$database_password --databases $dbase --no-create-db --default-character-set=utf8 --result-file={$targetSql}");
			
			//If no mysqldump was possible try:
			if (file_exists($targetSql) or filesize($targetSql) <= 0) {
				system(sprintf(\'mysqldump --no-tablespaces --opt -h%s -u%s -p"%s" %s --result-file=%s\', $database_server, $database_user, $database_password, $dbase, $targetSql));
			}
		}
		
		//File-Backup
		if (!empty($_POST["files"])){
		    
		    //creating exclude-files command
		    if (!empty($excludes)) {
		        $excludes_array = explode(",", $excludes);
		        unset($excludes);
		        foreach ($excludes_array as $exclude){
		            $excludes .= \' --exclude=\'.$exclude;
		        }
		    }
		    
		    //tar files
			system("$tarAlias cf {$targetTar} --exclude=$targetPath --exclude={$core_path}cache/* {$excludes} $base_path $core_path");
			
			//If a note exists add it to the tar-archive
			if (file_exists($targetTxt)) {
			    system("$tarAlias uf {$targetTar} -C $targetPath {$dbase}_{$date}_readme.txt"); //adding note in the root
			}
		}
		
		
		//Combine SQL and Files in one archive
		if (file_exists($targetSql) and file_exists($targetTar) and filesize($targetSql) > 0) {
			system("cp {$targetTar} {$targetCom}"); //copy files-archive
			system("$tarAlias uf {$targetCom} -C $targetPath {$dbase}_{$date}_mysql.sql"); //adding sql-file in the root
		}
		
		$backup = true;

		//Output
		if (file_exists($targetSql) and filesize($targetSql) > 0) {
			$mysql_link = fileLink($targetSql, \'MySQL\');
		}else {
		    $mysql_link = \'<span style="display: inline-block; width: 90px;">MySQL:</span>No Backup!\';
		}
		if (file_exists($targetTar)) {
			$files_link = fileLink($targetTar, \'Files\');
		}else {
		    $files_link = \'<span style="display: inline-block; width: 90px;">Files:</span>No Backup!\';
		}
		if (file_exists($targetCom)) {
			$combi_link = fileLink($targetCom, \'MySQL & Files\');
		}
		
	}
}




//Remove Backups
if (!empty($_POST["removeBackup"])){
	if (!empty($_POST["removeBackup"])) {
		foreach(glob("$targetPath/*") as $file) {
			$extension = pathinfo($file, PATHINFO_EXTENSION);
			if (in_array($extension, array("tar", "sql", "txt"))) {
			    unlink($file);
			}
		}
		rmdir($targetPath);
	}
}




if ($backup != true) {

	echo \'
		<form method="post" action="">
			<p>
				Backup your MODX-Site:<br><br>
				<input type="checkbox" name="mysql" id="mysql" value="1" checked><label for="mysql"> MySQL Database</label><br />
				<input type="checkbox" name="files" id="files" value="1" checked><label for="files"> Files</label>
			</p>
			<br>
			<p>
				Folder to place files: <strong>\'.$targetPath.\'</strong> <span style="color: grey;">(Editable via Snippet-Properties)</span><br>
			</p><br>
			
			<p>Add a readme file: <span style="color: grey;">(txt-file placed in the root)</span></p>
			<textarea name="note" style="width:90%; height:40px; display: block; border: 1px solid #ccc; margin: 5px 0 20px 0; padding: 5px;" placeholder="place your notes here..."></textarea>
			
			<input class="x-btn x-btn-small x-btn-icon-small-left primary-button x-btn-noicon" type="submit" name="backupMODX" value="Backup Site!">
		</form>\';
}else {
	if ($backup == true) {
		echo\'
			<form method="post" action="">
				<h3 style="color:grey">Backup Finished!</h3>
				<p>
					\'.$mysql_link.\'<br>
					\'.$files_link.\'<br>
					\'.$combi_link.\'
				</p><br>
				<input class="x-btn x-btn-small x-btn-icon-small-left primary-button x-btn-noicon" type="submit" name="removeBackup" value="Remove Backups">
			</form>\';
	}
}',
    ),
  ),
);