<?php

class AboutUsController extends Controller
{
    public function index()
    {

        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $pageObj = new Page($dbc);
        $pageObj->findById(2);

        $items['pageObj'] = $pageObj;

        $template = new Template('default');
        $template->view('static-page', $items);
    }
}
