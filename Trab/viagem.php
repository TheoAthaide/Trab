<?php

print "Digite a distancia em km: \n";
$km = (int) fgets(STDIN);

print "Digite a velocidde média em km/h: \n";
$vel = (int) fgets(STDIN);

$tempo = round($km / $vel);

print "O tempo da viagem vai ser aproximadamente $tempo horas \n\n";