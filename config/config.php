<?php
    require __DIR__ . '/../vendor/autoload.php';
    
    $dotenv = new Dotenv\Dotenv(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'));
    $dotenv->load();
?>