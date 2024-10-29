<?php 

require_once '../app/models/Events.php';

class EventsController {
    private $eventsModel;

    public function __construct() {
        $this->eventsModel = new Events();
    }

    public function index() {
        $events = $this->eventsModel->getAllEvents();
        require_once '../app/views/events/index.php';
    }

    public function create() {
        require_once '../app/views/events/create.php';
    }

    public function simpan() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nama_event' => $data['nama_event']
            ];

            if ($this->EventsModel->createModel($data)) {
                header('Location: /events');
                exit;
            }
        }
    }
}