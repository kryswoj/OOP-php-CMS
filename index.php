<?php
session_start();

define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . 'view' . DIRECTORY_SEPARATOR);

require_once ROOT_PATH . 'src/Controller.php';
require_once ROOT_PATH . 'src/Template.php';
require_once ROOT_PATH . 'model/Page.php';
require_once ROOT_PATH . 'src/DatabaseConnection.php';

/* Connect to mySQL */

DatabaseConnection::connect('127.0.0.1', 'php_cms', 'root', '');





$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action  = $_GET['action'] ?? $_POST['action'] ?? 'index';

if ($section == 'about') {
    include ROOT_PATH . 'controller/AboutUsController.php';

    $aboutController = new AboutUsController();
    $aboutController->runAction($action);

} else if ($section == 'contact') {
    include ROOT_PATH . 'controller/ContactController.php';

    $contactController = new ContactController();
    $contactController->runAction($action);

}  else {
    include ROOT_PATH . 'controller/HomeController.php';
    $homeController = new HomeController();
    $homeController->runAction($action);
}


