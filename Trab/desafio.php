<?php

print "Informe a área a ser pintada em m²: \n\n";
$mqua = (int) fgets(STDIN);

print "Digite em que forma você quer comprar a tinta
        1. Latas de 18 litros
        2. Galões de 3,5 litros
        3. Misturas os dois \n \n";
$escolha = (int) fgets(STDIN);


if ($escolha === 1)

{ 
    $litros_tinta = ceil($mqua / 6);
    $latas_totais = ceil($litros_tinta / 18);
    $preco_total = round($latas_totais * 80);
  


    print "Você precisara de $litros_tinta litros para cobrir a area \n";
    print "você ira precisar de $latas_totais latas, custando R$$preco_total_total,00 \n\n";
}



if ($escolha === 2)


{
    $litros_tinta = ceil($mqua / 6);
    $latas_totais = ceil($litros_tinta / 3.6);
    $preco_total = round($latas_totais * 25);


    print "Você precisara de $litros_tinta litros para cobrir a area \n";
    print "você ira precisar de $latas_totais latas, custando R$$preco_total_total,00 \n\n";
}


if ($escolha === 3)

{

    
    $litros_tinta = ceil($mqua / 6);
    $latas_totais = ceil($litros_tinta/18);
    $restol = ceil($latas_totais%18);
    $galoes_totais = ceil($restol/3.6);
    $preco_total = round($latas_totais * 80 + $galoes_totais * 25);
    $porcento = round($preco_total * 10 / 100);
    $preco_total_total = round($preco_total + $porcento);


    print "Você precisara de $litros_tinta litros para cobrir a area \n";
    print "você ira precisar de $latas_totais latas de 18L e $galoes_totais galoes de 3,6L, totalizando o custo de R$$preco_total_total,00 \n\n";
}