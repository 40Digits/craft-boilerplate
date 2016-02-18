<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

$customConfig = array(

	// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
	'server' => CRAFT_DB_SERVER,

	// The name of the database to select.
	'database' => CRAFT_DB_NAME,

	// The database username to connect with.
	'user' => CRAFT_DB_USER,

	// The database password to connect with.
	'password' => CRAFT_DB_PASSWORD,

	// The prefix to use when naming tables. This can be no more than 5 characters.
	'tablePrefix' => 'craft',

);

// If a local config file exists, merge any local config settings
if (is_array($customLocalDBConfig = @include(CRAFT_CONFIG_PATH . 'local/db.php')))
{
  $customConfig = array_merge($customConfig, $customLocalDBConfig);
}

return $customConfig;
