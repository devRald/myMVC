<?php
define("DIR",__DIR__);
define("BASEPATH",$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR);

require_once 'core/library/Router.php';
$route = new Router();
?>