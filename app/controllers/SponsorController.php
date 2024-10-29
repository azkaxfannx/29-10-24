<?php
require_once '../app/models/Sponsor.php';

class SponsorController {
    private $sponsorModel;

    public function __construct() {
        $this->sponsorModel = new Sponsor();
    }

    public function index() {
        $sponsors = $this->sponsorModel->getAllSponsors();
        require_once '../app/views/sponsor/index.php';
    }

    public function create() {
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $data = [
        //         'id_sponsor' => $data['id_sponsor'],
        //         'nama_sponsor' => $data['nama_sponsor'],
        //         'kontribusi_sponsor' => $data['kontribusi_sponsor'],
        //         'besaran_kontribusi' => $data['besaran_kontribusi']
        //     ];

        //     if ($this->sponsorModel->createSponsor($data)) {
        //         header('Location: /sponsor/index');
        //         exit;
        //     }
        // }
        require_once '../app/views/sponsor/create.php';
    }

    public function edit($id) {
        $sponsor = $this->sponsorModel->getSponsorById($id);
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'event_id' => $_POST['event_id'],
                'sponsor_name' => $_POST['sponsor_name'],
                'contribution' => $_POST['contribution'],
                'contribution_amount' => $_POST['contribution_amount']
            ];

            if ($this->sponsorModel->updateSponsor($id, $data)) {
                header('Location: index.php?controller=sponsor&action=index');
                exit;
            }
        }
        require_once 'views/sponsor/edit.php';
    }

    public function delete($id) {
        if ($this->sponsorModel->deleteSponsor($id)) {
            header('Location: index.php?controller=sponsor&action=index');
            exit;
        }
    }
}
