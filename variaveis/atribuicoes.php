<div class="titulo">Atribuições</div>

<?php

    $title = 'Atribuições';  //Cria uma variável e define o valor dela.

    $numero = 10; //Cria uma variável e define o valor dela.
    echo '<br>' . $numero; // Imprime o valor davariável no browser

    $numero = $numero - 3; // 
    echo '<br>' . $numero;

    $numero = $numero + 1.5; //Soma uma número para variável a altera o valor dela para um float
    
    echo '<br>' . $numero;

    $numero--; //(Notação Pósfixada): Decrementa 1 unidade do valor da variável
    echo '<br>';
    echo $numero;
    
    
    --$numero; //(Notação Prefixada): Decrementa 1 unidade do valor da variável
    echo '<br>' . $numero;

    $numero++; //(Notação Pósfixada): Decrementa 1 unidade do valor da variável
    echo '<br>';
    echo $numero;

    ++$numero; //(Notação Prefixada): Decrementa 1 unidade do valor da variável
    echo '<br>';
    echo $numero;
     
    $numero = 5; //Está substituindo o valor da variável .
    $numero -= 5; //Não está substituindo o valor da variável e sim subtraindo.
    echo '<br>';
    echo $numero;

    echo '<br>';
    
    $texto = 'Esse é um texto'; //Cria uma variável string e atribui o valor dela.
    echo '<br>' . $texto; //quebra linha e imprime o valor da variável "texto".

    $texto = $texto . ' qualquer'; //A variável recebe o valor dela mesmo e concatena com um texto.
    echo '<br>' . $texto; //quebra linha e imprime o valor da variável "texto".

    $texto = $texto . ' de verdade';
    echo '<br>' . $texto; //quebra linha e imprime o valor da variável "texto".












?>
