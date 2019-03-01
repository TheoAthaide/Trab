<?php

print "Digite o seu preço: \n";
$preco = (int) fgets(STDIN);

print "Digite o seu desconto: \n";
$desconto = (int) fgets(STDIN);


$porsa = $preco * $desconto / 100;

$total = $preco - $porsa;

print "Total de desconto: $porsa \n\n";

print "O preço final fica em: $total \n\n";