<?php

class Template {
    private $layout;

    public function __construct($layout)
    {
        $this->layout = $layout;
    }

    public function view($template, $items)
    {
        extract($items);

        include VIEW_PATH . 'layout/default.php';
    }
}