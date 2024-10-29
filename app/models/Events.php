<?php 

require_once '../config/database.php';

class Events {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllEvents() {
        $query = $this->db->query("SELECT * FROM events");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addEvent($nama_event) {
        
    }
}