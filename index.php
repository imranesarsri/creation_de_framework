<?php


if (isset($_GET['action'])) {
    $Action = $_GET['action'];
    $pages = ['Home', 'Contact', 'Product'];
    if (in_array($Action, $pages)) {
        include_once "./Views/" . $Action . ".php";
    } else {
        include_once "./Views/Error404.php";
    }
} else {
    include_once "./Views/Home.php";
}