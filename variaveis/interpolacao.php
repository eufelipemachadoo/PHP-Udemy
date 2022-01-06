<div class="titulo">Interpolação</div>

<?php
    //Interpolação = Interpretação

    $numero = 10;
    echo $numero;
    echo '<br> $numero'; //Aspas simples não reconhece umavariável e trata ela como string.
    echo "<br> $numero"; //Aspas dupla reconhece variável.

    echo '<br>';
    $texto = "A sua nota é: $numero";
    echo $texto;

    $objeto = 'caneta';
    echo "<br>Eu tenho 5 $objetos"; //Não reconhece a variável por que ela não existe.
    echo "<br> Eu tenho 5 {$objeto}s"; // trás a variável e complementa com uma string.
?>