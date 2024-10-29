<?php 

require_once '../app/models/Index.php';

class IndexController {
    private $indexModel;

    public function __construct() {
        $this->indexModel = new Index();
    }

    public function index() {
        require_once '../app/views/index.php';
    }
}