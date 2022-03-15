<?php

include 'components/navigation.php';
$section = $_GET['section'] ?? 'home';

if ($section == 'about-us') {
  include 'controller/aboutUsPage.php';
} else if ($section == 'contact') {
  include 'controller/contactUsPage.php';
}  else {
  include 'controller/homePage.php';
}


