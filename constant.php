<?php 

//ini global tidak bisa didalam class
define('NAMA', 'Muhamad Sahnuri');
echo NAMA;

echo "<br>";

//ini bisa dimasukkan kedalam class
const UMUR = 23;
echo UMUR;

echo "<hr>";

class Coba {
    const NAMA1 = "Sahnuri";
}

echo Coba::NAMA1;

//dibawha ini magic constant
echo "<hr>";
echo __LINE__;
echo __FILE__;
echo __DIR__;
echo __FUNCTION__;
echo __CLASS__;
echo __TRAIT__;
echo __NAMESPACE__;

function coba()
{
    return __FUNCTION__;
}

echo coba(); 