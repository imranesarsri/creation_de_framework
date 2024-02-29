<?php

$action = isset($_GET['action']) ? $_GET['action'] : '';
$viewPath = "./Views/Home.php";
$Content = '';

if (!empty($action)) {
    $viewPath = "./Views/$action.php";
}

ob_start();
if (file_exists($viewPath)) {
    include_once $viewPath;
} else {
    include_once "./Views/Error404.php";
}
$Content = ob_get_clean();

include_once('./Views/Layout/Layout.php');