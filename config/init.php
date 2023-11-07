<?php

session_start();
//config file
require_once 'config.php';
require_once 'helpers/system_helper.php';
//Autoloader
function myAutoloader($class_name) {
    require_once 'lib/'.$class_name .'.php';
}
spl_autoload_register('myAutoloader');