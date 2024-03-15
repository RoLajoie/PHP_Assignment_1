<?php
namespace app\controllers;

class Contact extends \app\core\Controller {

    function index(){
        //echo('contact');
        $this->view('Contact/index');
    }

    function read(){
        //echo('message');
        $this->view('Contact/read');
    }
}