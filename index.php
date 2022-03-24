<?php
session_start();
require_once 'src/Controller.php';
require_once 'src/Template.php';


$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action  = $_GET['action'] ?? $_POST['action'] ?? 'index';

if ($section == 'about') {
    include 'controller/aboutUsPage.php';

    $aboutController = new AboutUsController();
    $aboutController->runAction($action);

} else if ($section == 'contact') {
    include 'controller/contactUsPage.php';

    $contactController = new ContactController();
    $contactController->runAction($action);

}  else {
    include 'controller/homePage.php';
    $homeController = new HomeController();
    $homeController->runAction($action);
}


