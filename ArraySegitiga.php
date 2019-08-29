<?php

function LuasSegitiga($a,$t)
{
    $hasil = 0;
    $hasil = 0.5 * $a * $t;
    return "hasil Luas Segitiga : " . $hasil;
}
$luas = LuasSegitiga(10,11);
echo $luas;