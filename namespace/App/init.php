<?php

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);

    require_once __DIR__ . '/Produk/' . $class . '.php';
});


spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    
    require_once __DIR__ . '/Service/' . $class . '.php';
});
//ini adalah penerapan auto loading, karenea tidak ribet menerapkan require yang sangat banyak pada file index.php