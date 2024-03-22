<?php
require_once("support.php");

class member {
    private $fullname;
    private $email;
    private $idmember;

    public function __construct($fullname, $email, $idmember) {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->idmember = $idmember; // Assign the provided value to $idmember
    }

    public function __destruct() {
        $this->fullname = NULL;
        $this->email = NULL;
        $this->idmember = NULL;
    }

    public function get_fullname() {
        return $this->fullname;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_idmember() {
        return $this->idmember;
    }
}
?>
