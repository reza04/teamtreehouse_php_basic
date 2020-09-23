<?php

$number=1 ; //integer

$float=1.2 ; //float

$int_float= (int)$float; //Integert

$srt_float=(string)$float; //String

$srt_bolean=(bool)$float; //Bolean

var_dump($srt_bolean);

function kali(int $satu,int $dua):int
{
    return $satu*$dua;
}

/**
 * Operator
 * subtract(-)
 * addition(+)
 * multiply(*)
 * divide(/)
 * increment(++)
 * dectrement(--)
 * 
 */
echo 4/2; //2
echo PHP_EOL;
echo 4%2; //0

$angka=1; //1
$angka++; //2
$angka--; //1
$angka++; //
$angka+=9; //10
$angka/=5; //2
$angka.="tujuh"; //2 dan 7 atau 2 tujuh


echo PHP_EOL;
echo $angka;

echo "\n";
for($x=1;$x<=10;$x++)
{
    echo $x.PHP_EOL;
}

$s=5;
var_dump($s++);
