<?php
class ContactController extends Controller
{
    public function index()
    {


        $pageObj = new Page($this->dbc);
        $pageObj->findBy('id', $this->entityId);

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

        $pageObj = new Page($this->dbc);
        $pageObj->findById(4);

        $items['pageObj'] = $pageObj;


        $template = new Template('default');
        $template->view('static-page', $items);
    }

    public function runBeforeAction()
    {

        if ($_SESSION['submitForm'] ?? 0 == 1) {

            $pageObj = new Page($this->dbc);
            $pageObj->findById(3);

            $items['pageObj'] = $pageObj;

            $template = new Template('default');
            $template->view('static-page', $items);
            return false;
        }

        return true;
    }
}