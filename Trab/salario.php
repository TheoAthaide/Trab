<?php

print "Digite o seu salário: \n";
$salario = (int) fgets(STDIN);

print "digite á porcentagem de aumento \n";
$aumento = (int) fgets(STDIN);

$porsa = $salario * $aumento / 100;

$total = $porsa + $salario;

print "Seu aumento fica em: $total \n\n";