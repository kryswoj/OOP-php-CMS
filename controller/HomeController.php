<?php

class HomeController extends Controller {
    public function index()
    {
        //fetch SEO data
        //get the page data

        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $pageObj = new Page($dbc);
        $pageObj->findById(1);

        $items['pageObj'] = $pageObj;

        $template = new Template('default');
        $template->view('static-page', $items);
    }
}