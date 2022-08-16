<?php

spl_autoload_register(function ($class)
{

    $dirs = ['controllers', 'models', 'components'];

    foreach ($dirs as $dir) {
        $fullClassPath = "$dir/$class.php";
        if (file_exists($fullClassPath)) {
            include_once($fullClassPath);
        }
    }
});