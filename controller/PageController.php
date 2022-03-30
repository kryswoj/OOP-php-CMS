<?php

class PageController extends Controller
{


    public function index()
    {
        $pageObj = new Page($this->dbc);
        $pageObj->findBy('id', $this->entityId);

        $items['pageObj'] = $pageObj;

        $template = new Template('default');
        $template->view('static-page', $items);
    }

}