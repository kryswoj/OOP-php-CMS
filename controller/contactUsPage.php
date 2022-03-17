<?php

class ContactController extends Controller
{
    public function index() {
        include 'view/contact-us.php';
    }

    public function submitForm() {
        include 'view/components/thank-you.php';
    }
}