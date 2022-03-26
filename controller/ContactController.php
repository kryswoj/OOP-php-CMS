<?php
class ContactController extends Controller
{
    public function index()
    {
        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $pageObj = new Page($dbc);
        $pageObj->findById(5);

        $items['pageObj'] = $pageObj;


        $template = new Template('default');
        $template->view('contact/contact-us', $items);
    }

    public function submitForm()
    {
        //validate
        //store data
        //send email
        $_SESSION['submitForm'] = 1;

        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $pageObj = new Page($dbc);
        $pageObj->findById(4);

        $items['pageObj'] = $pageObj;


        $template = new Template('default');
        $template->view('static-page', $items);
    }

    public function runBeforeAction()
    {

        if ($_SESSION['submitForm'] ?? 0 == 1) {
            $dbh = DatabaseConnection::getInstance();
            $dbc = $dbh->getConnection();

            $pageObj = new Page($dbc);
            $pageObj->findById(3);

            $items['pageObj'] = $pageObj;

            $template = new Template('default');
            $template->view('static-page', $items);
            return false;
        }

        return true;
    }
}