<?php

require "init.php";


try {
    echo $twig->render('index.twig');
} catch (\Twig\Error\LoaderError $e) {
    var_dump($e);
} catch (\Twig\Error\RuntimeError $e) {
    var_dump($e);
} catch (\Twig\Error\SyntaxError $e) {
    var_dump($e);
}
