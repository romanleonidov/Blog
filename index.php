<?php

require 'application/lib/Dev.php';

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', '.php');
    if (file_exists($path)) {
        require $path;
    }
});