<?php

include 'components/navigation.php';

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action  = $_GET['action'] ?? $_POST['action'] ?? 'show';

if ($section == 'about-us') {
    include 'controller/aboutUsPage.php';
} else if ($section == 'contact') {
    include 'controller/contactUsPage.php';
    $contactController = new ContactController();
    $contactController->runAction($action);
}  else {
    include 'controller/homePage.php';
}


