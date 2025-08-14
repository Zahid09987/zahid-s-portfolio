<?php
session_start();
require_once 'config/config.php';
require_once 'vendor/autoload.php';
include 'partials/header.php';

$allowed_pages = ['home', 'about', 'project', 'contact'];

$page = $_GET['page'] ?? 'home';

if (in_array($page, $allowed_pages)) {
    $page_path = "pages/{$page}.php";
    if (file_exists($page_path)) {
        include $page_path;
    } else {
        include 'pages/404.php';
    }
} else {
    include 'pages/404.php';
}

include 'partials/footer.php';
