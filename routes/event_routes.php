<?php
// routes.php

require_once '../app/controllers/EventsController.php';

$controller = new EventsController();

$url = $_SERVER['REQUEST_URI'];

if ($url == '/events') {
    $controller->index();
}  elseif ($url == '/events/create') {
    $controller->create();
} elseif ($url == '/events/simpan') {
    $controller->simpan();
} else {
    echo "404 Not Found";
}
