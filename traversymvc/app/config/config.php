<?php

// App Root
echo __FILE__;

$dirname = dirname(__FILE__);

// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', 'tmvc');


// This defines a constant in PHP
// Application root
define('APPROOT', dirname($dirname));

// URL root.  This is all that needs to change if we rehost.
define('URLROOT', 'http://localhost/traversymvc');

// Site Name
define('SITENAME', 'TraversyMVC');

?>
