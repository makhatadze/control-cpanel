<?php
require "cPanel/cPanel.php";
require "./vendor/autoload.php";


session_start();


// Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__, '/views');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/cache',
]);

// cPanel
$cPanel = new cPanel('', '', '');
var_dump($cPanel);
exit();