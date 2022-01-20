<div class="titulo">Operadores Lógicos</div>

<?php
    echo    "<p class='divisao'> <strong>Negação lógica</strong></p><hr>";
    var_dump(true);
    echo '<br>';
    var_dump(!true); //Not

    echo "<p class='divisao'><strong>Tabela Verdade 'AND' (E)</strong></p><hr>"; //SÓ RETORNA RERDADEIRO SE TODAS AS ENTRADAS FOREM VERDADEIRAS
    var_dump(true && true) ;
    var_dump(true && false);
    var_dump(false && true);
    var_dump(false && false);
    var_dump(true & 3>2 && 7 <= 7);

    var_dump(true and true) ;
    var_dump(true and false) ;
    var_dump(false and true) ;
    var_dump(true and false) ;


    echo "<p class='divisao'><strong>Tabela Verdade 'OR'</strong></p><hr>"; //SÓ RETORNA RERDADEIRO SE TODAS AS ENTRADAS FOREM VERDADEIRAS
    var_dump(true || true) ;
    var_dump(true || false) ;
    var_dump(false || true) ;
    var_dump(false || false) ;


    var_dump(true or true) ;
    var_dump(true or false) ;
    var_dump(false or true) ;
    var_dump(true or false) ;

    echo '<br>';


    echo "<p class='divisao'><strong>Tabela Verdade 'XOR' (OU Exclusivo)</strong></p><hr>";
    var_dump(true xor true) ;
    var_dump(true xor false) ;
    var_dump(false xor true) ;
    var_dump(true xor false) ;

    var_dump(true != true) ;
    var_dump(true != false) ;
    var_dump(false != true) ;
    var_dump(true != false) ;


    echo "<p class='divisao'>Exemplo </p><hr>";
    $idade = 60;
    $sexo = 'M';

    if ($idade >= 60 && $sexo==='F'){
        echo "Pode se aposentar";
    }elseif ($idade >= 65 && $sexo === 'M'){
        echo "Pode se aposentar";
    }else {
        echo "Vai ter que trabalhar mais um pouco";
    }



?>
