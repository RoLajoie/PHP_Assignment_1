<?php

namespace app\controllers;

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

            $messageModel = new \app\models\MessageMod($email, $message, $IP);

            $messageModel->write();

            header('Location: /app/views/Contact/index.php?success=1');
            exit();
        }
    }
}

$messageController = new MessageController();
$messageController->submit();
