<?php
class ContactController extends Controller
{
    public function index()
    {
        $items['title'] = 'Contact us';
        $items['content'] = 'Please, write us a message ;).';


        $template = new Template();
        $template->view('contact/contact-us', $items);
    }

    public function submitForm()
    {
        //validate
        //store data
        //send email
        $_SESSION['submitForm'] = 1;

        include 'view/contact/thank-you.php';
    }

    public function runBeforeAction()
    {

        if ($_SESSION['submitForm'] ?? 0 == 1) {
            include 'view/contact/thank-you.php';
            return false;
        }

        return true;
    }
}