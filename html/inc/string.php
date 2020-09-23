<?php

//buat function askName
//parameternya $nama
//tampilkan "Namamu adalah $nama
//aslName("Ahmad Dhani);//Namamu adalah Ahmad Dhani

function askName($name)
{
    $format_name=ucwords(strtolower($name));
    echo "Namamu adalah $format_name";
}

// askName ("Ahmad Dhani");