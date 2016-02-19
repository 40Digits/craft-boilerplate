<?php

defined('CRAFT_BASE_PATH') || define('CRAFT_BASE_PATH', str_replace('\\', '/', realpath(dirname(__FILE__)).'/craft/'));
defined('CRAFT_CONFIG_PATH') || define('CRAFT_CONFIG_PATH', CRAFT_BASE_PATH.'/config/');

$localDBConfig = include CRAFT_CONFIG_PATH.'local/db.php';
$localGeneralConfig = include CRAFT_CONFIG_PATH.'local/general.php';
$localSyncOptions = $localGeneralConfig['syncOptions'];

//get local db variables
$dbHost = $localDBConfig['server'];
$dbName = $localDBConfig['database'];
$dbUser = $localDBConfig['user'];
$dbPass = $localDBConfig['password'];

//get ssh variables
$sshUser = $localSyncOptions['sshUser'];
$sshHost = $localSyncOptions['sshHost'];

//get remote db variables
$remoteDbUser = $localSyncOptions['remoteDbUser'];
$remoteDbPass = $localSyncOptions['remoteDbPass'];
$remoteDbName = $localSyncOptions['remoteDbName'];

echo "Copying remote database to local database... \n";
shell_exec("ssh -C {$sshUser}@{$sshHost} mysqldump -u {$remoteDbUser} --password={$remoteDbPass} {$remoteDbName} | mysql -u {$dbUser} --password={$dbPass} -D {$dbName}");

//sync folders if there are folders to sync
if (!empty($localSyncOptions['folderOptions'])) {
    foreach ($localSyncOptions['folderOptions'] as $folderKey => $folderOptions) {
        $remoteFolder = $folderOptions['remoteFolder'];
        $localFolder = $folderOptions['localFolder'];

        echo "Copying remote {$folderKey} folder to local {$folderKey} folder... \n";
        echo shell_exec("rsync -avzh --progress --stats {$sshUser}@{$sshHost}:{$remoteFolder} {$localFolder}");
    }
}
