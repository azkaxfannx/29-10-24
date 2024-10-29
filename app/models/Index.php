<?php 

require_once '../config/database.php';

class Index {
    public function __construct() {
        $this->db = (new Database())->connect();
    }
}