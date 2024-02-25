<?php
namespace app\Model;

class MessageMod {
    private $message;
    private $email;
    private $IP;

    public function __construct($email, $message, $IP) {
        
        $this->email = $email;
        $this->message = $message;
        $this->IP = $IP;
    }

    public static function read() {
        $messages = file(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'messages.json');
        return $messages;
    }

    public function write() {
        // Define the file path
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'messages.json';
    
        // Encode the message data
        $message = json_encode([
            'email' => $this->email,
            'message' => $this->message,
            'IP' => $this->IP
        ]);
    
        // Open the file for appending
        $file = fopen($filePath, 'a');
        if ($file === false) {
            // Handle error opening the file
            die('Error opening file.');
        }
    
        // Acquire an exclusive lock on the file
        flock($file, LOCK_EX);
    
        // Write the message data to the file
        fwrite($file, $message . PHP_EOL);
    
        // Release the lock and close the file
        flock($file, LOCK_UN);
        fclose($file);
    }
    
    
    
}
?>
