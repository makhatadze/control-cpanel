<?php
require "cPanel/cPanel.php";
require "./vendor/autoload.php";


session_start();


// Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__. '/views');
$twig = new \Twig\Environment($loader);

// cPanel
$cPanel = new cPanel('cabinetviptrade', '(293709B13', '144.76.13.90');
