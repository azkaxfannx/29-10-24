<?php
// routes.php

require_once '../app/controllers/IndexController.php';

$controller = new IndexController();

$url = $_SERVER['REQUEST_URI'];

if ($url == 'index' || $url == '/') {
    $controller->index();
} elseif ($url == '/events' || $url == '/events/create' || $url == '/events/simpan') {
    require_once 'event_routes.php';
} elseif ($url == '/sponsor' || $url == '/sponsor/create') {
    require_once 'sponsor_routes.php';
} else {
    echo "404 Not Found";
}
