<?php

print "Informe quantos km o carro correu: \n";
$km = (int) fgets(STDIN);

print "Informe por quantos dias você o usou: \n";
$dias = (int) fgets(STDIN);

$precodias = $dias * 60;
$precokm = $km / 0.15;

$precototal = $precodias + $precokm;

print "preço total a pagar = $precototal R$";