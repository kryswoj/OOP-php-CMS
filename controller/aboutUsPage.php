<?php

class AboutUsController extends Controller
{
    public function index()
    {
        $items['title'] = 'About us';
        $items['content'] = 'Welcome to our About Us page';


        $template = new Template();
        $template->view('static-page', $items);
    }
}
