<?php

require_once('vendor/autoload.php');

//---- SYSTEM INITIALIZATION

set_include_path('/var/www/html:/var/www/html/src');

$controller = new \PhoenixPhp\Core\Controller();
echo $controller->render();
exit();