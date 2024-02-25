<?php
// Include the MessageMod class
require_once __DIR__ . '/../../Model/MessageMod.php';

// Read messages from the JSON file
$messages = app\Model\MessageMod::read();

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
    echo '<p>No messages found.</p>';
}
?>


