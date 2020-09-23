<?php

$tanya=readline("pilih mana (yes/no/maybe)");

if($tanya=="yes") //jika memilih yes
{
    echo "kamu memilih yes";
}elseif($tanya=="no") //jika memilih no
{
    echo "kamu memilih no";
}elseif($tanya=="maybe") //jika memilih maybe
{
    echo "kamu memilih maybe";
}else{
    echo "kamu tidak memilih pilihan hyang tersedia"; //jika tidak memilih pilihannya
}

echo PHP_EOL;

$menu=readline("Pilih angka 1-3 ? ");

//pilih input yang akan diuji
switch($menu)
{
    case 1:
        echo "Anda memilih angka 1";
    break;
    case 2:
        echo "Anda memilih angka 2";
    break;
    case 3:
        echo "Anda memilih angka 3";
    break;
    default:
    echo "Anda tidak memilih pilihan yang tersedia";
}