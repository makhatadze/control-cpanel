<?php

session_start();

require "cPanel/cPanel.php";
require "vendor/autoload.php";

// Twig
$loader = new Twig_Loader_Filesystem(__DIR__.'/views');
$twig = new Twig_Envirovment($loader);

// cPanel
$cPanel = new cPanel('example.com','password','ip');