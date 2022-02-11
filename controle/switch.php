<div class="titulo">Swith Case</div>


<?php
    $categoria = 'Sedan';
    $preco = 0.0;
    $carro = '';

   /* if ($categoria === 'Luxo'){
        $carro = 'Mercedes';
        $preco = 250000;
     }else if($categoria = 'SUV'){
         $carro = 'Renegade';
         $preco = 80000;
     }else if($categoria === 'Sedan'){
         $carro = 'Etios';
     }else{
         $carro = 'Mobi';
         $preco = 33000;
     }
    */

$precoFormatado = number_format ($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = '???';
switch (strtolower($categoria)){
    case 'Luxo':
        $carro = 'Mercedes';
        $preco = 25000;
        break;

    case 'suv':
    case 'suv Básico':
        $carro = 'Renegade';
        $preco = 80000;
        break;

    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;

    default: 
        $carro = 'Mobi';
        $preco = 33000;

}

$precoFormatado = number_format ($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";







?>
