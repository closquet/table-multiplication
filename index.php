<?php
//var_dump($_SERVER);
define('VIEWS_DIR',__DIR__ . '/views');
define('CONTROLLERS_DIR',__DIR__ . '/controllers');
define('CONFIGS_DIR',__DIR__ . '/configs');
set_include_path(get_include_path() . PATH_SEPARATOR . VIEWS_DIR . PATH_SEPARATOR . CONTROLLERS_DIR . PATH_SEPARATOR . CONFIGS_DIR);
var_dump(__DIR__);
require('tableController.php');
