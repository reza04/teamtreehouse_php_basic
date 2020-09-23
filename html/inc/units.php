<?php

//Buat Function CelciusToFanrenheit
//Nilai Celcius = 33.8
//Parameter function int celcius
//invoke function CelciusToFanrenheit(12); //print 53,6

function CelciustoFanrenheit($celcius )
{
    $conversi=($celcius*9/5+32);

    echo "$celcius celsius= $conversi";
}

// CelciustoFanrenheit (80);