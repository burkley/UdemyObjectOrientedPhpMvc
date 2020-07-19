<?php

  // Load Config
  require_once 'config/config.php';

  // Autoload Core Libraries.
  // Class names must match file names for this to work.
  spl_autoload_register(function($className) {
    require_once 'libraries/' . $className . '.php';
  });


?>
