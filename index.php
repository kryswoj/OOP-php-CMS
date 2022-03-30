<?php
session_start();

define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . 'view' . DIRECTORY_SEPARATOR);

require_once ROOT_PATH . 'src/Controller.php';
require_once ROOT_PATH . 'src/Entity.php';
require_once ROOT_PATH . 'src/Template.php';
require_once ROOT_PATH . 'model/Page.php';
require_once ROOT_PATH . 'src/DatabaseConnection.php';
require_once ROOT_PATH . 'src/Router.php';


/* Connect to mySQL */

DatabaseConnection::connect('127.0.0.1', 'php_cms', 'root', '');

$action = $_GET['seo_name'] ?? 'home' ;

$dbh = DatabaseConnection::getInstance();
$dbc = $dbh->getConnection();

$router = new Router($dbc);

$router->findBy('pretty_url', $action);

$action = $router->action != '' ? $router->action : 'index';

$moduleName = ucfirst($router->module) . 'Controller';

if (file_exists(ROOT_PATH . "controller/$moduleName.php")) {
    include ROOT_PATH . "controller/$moduleName.php";

    $controller = new $moduleName();
    $controller->setEntityId($router->entity_id);
    $controller->runAction($action);
}
