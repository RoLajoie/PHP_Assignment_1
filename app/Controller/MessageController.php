<?php

namespace app\Controller;

use app\Model\MessageMod;

require_once '../Model/MessageMod.php'; // Adjust the path as needed

class MessageController {

    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle form submission
            $email = $_POST['email'] ?? ''; // Ensure to handle cases where these values might not be set
            $message = $_POST['message'] ?? '';
            $IP = $_SERVER['REMOTE_ADDR'];

            // Create a new instance of MessageMod
            $messageModel = new MessageMod($email, $message, $IP);

            // Write the message to the file
            $messageModel->write();

            // Redirect back to the contact page with a success message
            header('Location: /app/Views/Contact/Contact_us.php?success=1');
            exit();
        }
    }
}

// Instantiate MessageController and call the submit method
$messageController = new MessageController();
$messageController->submit();
?>





