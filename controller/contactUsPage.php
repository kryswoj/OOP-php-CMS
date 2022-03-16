<?php

class ContactController {
    public function showFormAction() {
        include 'view/contact-us.php';
    }

    public function submitContactFormAction() {
        include 'view/components/thank-you.php';
    }

    public function runAction($actionName) {
        if (method_exists($this, $actionName)) {
            $actionName .= 'Action';
            $this->$actionName();
        } else {
            include 'view/status/404.php';
        }
    }
}