<?php

namespace app\models;

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
        $filePath = __DIR__ . '/../../Resources/messages.json';
        
        if (!file_exists($filePath)) {
            return []; // Return an empty array if the file doesn't exist
        }
        
        $messages = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        return $messages;
    }

    public function write() {
        $filePath = __DIR__ . '/../../Resources/messages.json';
        
        $message = json_encode([
            'email' => $this->email,
            'message' => $this->message,
            'IP' => $this->IP
        ]);
        
        $file = fopen($filePath, 'a');
        if ($file === false) {
            die('Error opening file.');
        }
        
        if (flock($file, LOCK_EX)) {
            fwrite($file, $message . PHP_EOL);
            flock($file, LOCK_UN);
        } else {
            fclose($file);
            die('Error locking file.');
        }
        
        fclose($file);
    }
}
