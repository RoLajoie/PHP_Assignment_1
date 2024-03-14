<?php

namespace app\controllers;

// Include or require the file containing the Controller class
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/MessageMod.php';
class MessageController extends \app\core\Controller {

    function index(){
        $this->view('Contact/index');
    }

    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? ''; 
            $message = $_POST['message'] ?? '';
            $IP = $_SERVER['REMOTE_ADDR'];

            // Adjust the namespace when instantiating the MessageMod class
            $messageModel = new \app\models\MessageMod($email, $message, $IP);

            $messageModel->write();

            // Adjust the path for the header redirect
            header('Location: /app/views/Contact/Contact_us.php?success=1');
            exit();
        }
    }
}

// Instantiate the MessageController and call the submit method
$messageController = new MessageController();
$messageController->submit();
