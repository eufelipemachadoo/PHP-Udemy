<div class="titulo">String PHP</div>

<?php

    echo 'Eu sou uma string ';
    echo '<br>';

    var_dump("Eu também");
    echo '<br>';

    //Concatenção

    echo "Nós também". ' somos';
    echo '<br>', "Também aceito", " virgulas";
    echo '<br>';
    echo "'Teste'" . '"Teste"' . '\'Teste\'' . "\"Teste\"". "\\";

    print ("<br> Também existe a função print");
    print "<br> Também existe a função print";


    //Algumas funções
    echo '<br>'. strtoupper('maximizado'); //Todas letras maiúsculas
    echo '<br>'. strtolower('minimizada'); //Todas letras minúsculas
    echo '<br>'. ucfirst('primeira'); //Primeira letra maiúscula
    echo '<br>'. ucwords('todas a palavras'); 
    echo '<br>'. strlen('Quantas letras');
    echo '<br>'. mb_strlen("Quantas letras", "utf-8");
    echo '<br>'. substr('Só uma parte mesmo', 7, 6); //Lê apartir do 7º caracter até o 6º sem contas com o 6º "Só até o 5º).
    echo '<br>'. str_replace('isso', 'aquilo', 'Trocar isso'); //troca a primeira variável pela segunda, dentro da 3ª variável.

?>

