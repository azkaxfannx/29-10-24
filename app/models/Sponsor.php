<?php
require_once '../config/database.php';

class Sponsor {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllSponsors() {
        $query = $this->db->query("SELECT * FROM sponsor");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createSponsor($data) {
        $query = "INSERT INTO sponsors (id_sponsor, nama_sponsor, kontribusi_sponsor, besaran_kontribusi) 
                  VALUES (:id_sponsor, :nama_sponsor, :kontribusi_sponsor, :besaran_kontribusi)";
        
        return $this->db->query($query, [
            'id_sponsor' => $data['id_sponsor'],
            'nama_sponsor' => $data['nama_sponsor'],
            'kontribusi_sponsor' => $data['kontribusi_sponsor'],
            'besaran_kontribusi' => $data['besaran_kontribusi']
        ]);
    }
}
