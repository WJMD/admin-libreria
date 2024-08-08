<?php

class Contact
{
    private $id;
    private $name;
    private $email;
    private $message;
    private $conn;
    private $contactTable = 'contacts';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function setContact($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function saveContact()
    {
        $sql = "INSERT INTO $this->contactTable (name, email, message) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $this->name, $this->email, $this->message);

        if ($stmt->execute()) {
            $this->id = $this->conn->insert_id;
            return true;
        } else {
            return false;
        }
    }

    public function getId()
    {
        return $this->id;
    }
}