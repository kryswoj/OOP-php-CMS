<?php

class Controller {
    public function runAction($actionName) {
        if (method_exists($this, $actionName)) {
            $this->$actionName();
        } else {
            include 'view/status/404.php';
        }
    }
}

