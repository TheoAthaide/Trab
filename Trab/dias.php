<?php

print "Informe a quantidade de dias: \n";
$dias = (int) fgets(STDIN);

print "Informe a quantidade de horas: \n";
$horas = (int) fgets(STDIN);

print "Informe a quantidade de minutos: \n";
$minutos = (int) fgets(STDIN);

print "Informe a quantidade de segundos: \n";
$segundos = (int) fgets(STDIN);

$diaseg = $dias * 86400;
$horaseg = $horas* 3600;
$minutoseg = $minutos * 60;

$segseg = $diaseg + $horaseg + $minutoseg;


print "A quantodade de segundos registrados é igual á: $segseg \n \n";


