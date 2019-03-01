<?php

print "Digite a temperatura em celcius para er convertida em fahrenheit: \n";
$celcius = (int) fgets(STDIN);

$fare =  9*$celcius/5 + 32;

print "o valor convertido de celcius para Fahrenheit é: $fare \n\n";