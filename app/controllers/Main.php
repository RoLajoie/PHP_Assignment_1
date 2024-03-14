<?php
namespace app\controllers;

class Main extends \app\core\Controller {
    function about_us() {
        //echo('about us is called');
        $this->view('Main/about_us');
    }

    function index() {
        //echo('controller method is called');
        $this->view('Main/index');
    }

    
}
