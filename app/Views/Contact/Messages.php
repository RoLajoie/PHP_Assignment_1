<?php
//Uses directory MessageMod.php
require_once __DIR__ . '/../../Model/MessageMod.php';

//Creates variable that uses the read method 
$messages = app\Model\MessageMod::read();

//If it's not empty, it create paragraph links that form the information in the messages.json file
if (!empty($messages)) {
    foreach ($messages as $message) {
        $data = json_decode($message, true);
        echo '<p>';
        echo 'Email: ' . $data['email'] . '<br>';
        echo 'Message: ' . $data['message'] . '<br>';
        echo 'IP: ' . $data['IP'] . '<br>';
        echo '</p>';
    }
} else {
    //Otherwise say no thanks
    echo '<p>No messages found.</p>';
}
?>


