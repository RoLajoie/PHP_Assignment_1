<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <link href="../public/css/style.css" rel="stylesheet"> 
</head>

<body>

<div class="navbar">
    <ul>
        <li><a href="/Main/index">Landing page</a></li>
        <li><a href="/Main/about_us">About Us</a></li>
        <li><a href="/Contact/Contact_Us">Contact Us</a></li>
        <li><a href="/Contact/Messages">See the messages we get</a></li>
    </ul>
</div>

<div class="message-container">
    <?php
    // Uses directory MessageMod.php
    require_once __DIR__ . '/../../models/MessageMod.php';

    $messages = app\models\MessageMod::read();

    if (!empty($messages)) {
        foreach ($messages as $message) {
            $data = json_decode($message, true);

            echo '<div class="message">';

            echo '<p class="email">Email: ' . $data['email'] . '</p>';

            echo '<p class="message-content">Message: ' . $data['message'] . '</p>';

            echo '<p class="ip">IP: ' . $data['IP'] . '</p>';

            echo '</div>';
        }
    } else {

        echo '<p class="no-messages">No messages found.</p>';
    }
    ?>
</div>

</body>

</html>
