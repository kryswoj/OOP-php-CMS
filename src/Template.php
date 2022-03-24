<?php

class Template {
    public function view($template, $items)
    {
        extract($items);

        include 'view/layout/default.php';
    }
}