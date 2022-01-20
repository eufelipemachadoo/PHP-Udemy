<div class="titulo">Operadores Relacionais</div>

<?php
        var_dump(1 == 1, '<br>'); //Comparação "Um é igual a 1?
        var_dump(1 > 1, '<br>' ); //maior
        var_dump(1 >= 1, '<br>' );//maior ou igual
        var_dump(1 < 1, '<br>' ); //menor
        var_dump(1 <= 1, '<br>' );//menor ou igual
        var_dump(1 != 1, '<br>' );//
        var_dump(1 <> 1, '<br>' );//diferente
        var_dump(111 === '111', '<br>');//Igualdade estrita "valor e tipo" (1 como número e 1 como string)
        var_dump(111 !== '111','<br>');//diferença estrita "valor e tipo" (diferente do tipo numer e tipo string)
        var_dump(5 <=> 3); //spaceship

        echo '<p class="divisao">Relacionais no If/Else</p><br>';
        $idade = 55;

        if($idade <18 ){
            echo "Menor de idade = Contém $idade anos<br>";
        }elseif($idade <=65){
            echo "Adulto = Contém $idade anos<br>";
        }else{
            echo "Terceira idade = Contém $idade anos";
        }

        echo '<p class="divisao">Spaceship</p><hr>';
        var_dump(500 <=> 3); //Se o operador da esquerda for maior retorna o tipo de caracter e 1
        var_dump(50 <=> 50); //Se o operador da esquerda for igual retorna o tipo de caracter e 0
        var_dump(5 <=> 50); //Se o operador da esquerda for menor retorna o tipo de caracter e -1
        

        echo '<p class="divisao>Valores poder ser V ou F</p><br>';
        var_dump(!!5);
        var_dump(!!0);
        var_dump(!!"");
        var_dump(!!" ");
        
?>

<style>
    p{
        margin-bottom: 0px;
    }
    hr{
        margin-top: 0px;
    }
   
</style>