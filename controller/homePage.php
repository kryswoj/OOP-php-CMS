<?php

class HomeController extends Controller {
    public function index()
    {
        //fetch SEO data
        //get the page data

        $items['title'] = 'Home Title';
        $items['content'] = 'Welcome to our Home page';


        $template = new Template();
        $template->view('static-page', $items);
    }
}