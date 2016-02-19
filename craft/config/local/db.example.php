<?php

/**
 * Local DB Config Override
 *
 * Overrides added here will get will override config/db.php
 */

return array(
    // The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
    'server' => '127.0.0.1',

    // The name of the database to select.
    'database' => 'craft-boilerplate',

    // The database username to connect with.
    'user' => 'root',

    // The database password to connect with.
    'password' => '',

    // The prefix to use when naming tables. This can be no more than 5 characters.
    'tablePrefix' => 'craft',
);
