<?php

// Include or autoload your ContactModel class
require_once 'Model/ContactModel.php';

class ContactController {

    // instance of ContactModel
    private $contactModel;

    public function __construct() {
        // create one instance of ContactModel
        $this->contactModel = new ContactModel();
    }

    public function saveContact($data) {
        // triggers saving the contact to ContactModel
        $this->contactModel->saveToFile($data);
        
    }

    public function getContacts() {
        // triggers reading contacts to ContactModel
        return $this->contactModel->readFromFile();
 
    }


}

?>
