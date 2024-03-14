<?php
namespace app\controllers;

class Contact extends \app\core\Controller {

    function index(){
        //echo('contact');
        $this->view('Contact/Contact_Us');
    }

    function Messages(){
        //echo('message');
        $this->view('Contact/Messages');
    }
}