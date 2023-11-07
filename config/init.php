<?php

//config file
require_once 'config.php';

//Autoloader
function myAutoloader($class_name) {
    require_once 'lib/'.$class_name .'.php';
}
spl_autoload_register('myAutoloader');