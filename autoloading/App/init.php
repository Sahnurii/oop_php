<?php

spl_autoload_register(function($class){
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

//ini adalah penerapan auto loading, karenea tidak ribet menerapkan require yang sangat banyak pada file index.php