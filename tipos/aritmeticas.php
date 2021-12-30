<div class="titulo">Operações Aritméticas</div>

<?php
    echo 1+1, ': Soma padrão';
    echo '<br>';

    var_dump(1 + 1.0);
    echo ': Imprime informações a respeito do tipo de variável.';
    echo '<br>'; 

    echo 1 . 2.5, '<br>';
    echo 10 - 2, ': Subtração ', '<br>';

    echo 2 * 5, ': Multiplicação', '<br>';
    var_dump(7); 
    echo ': Imprime informações a respeito do tipo de variável', '<br>';

    var_dump(4) ;
    echo ': Imprime informações a respeito do tipo de variável', '<br>';

    echo 7/4, ': O PHP divide dois inteiros mas apresenta um float', '<br>'; 
    var_dump(7/4); 
    echo '<br> <br>';

    echo intdiv (7, 4), ': Divide dois inteiros porém arredonda o resultado para o número menor inteiro', '<br>'; 
    echo round(7/ 4), ': Divide dois inteiros porém arredonda o resultado para o número maior inteiro', '<br> <br>'; 

    echo 'Módulo', '<br>';
    echo 7 % 4,  ': Divide 7/4 = 1 e o resto é "3" até completar o 4 e apresenta somente o resto da operação', '<br>';
    echo 7 % 2, ': Se o resultado for 1, significa que o número é impar', '<br>';
    echo 8 % 4, ': Se o resultado for 0, significa que o número é par', '<br>' ;
    echo 7 / 0.0000001, ': Qualquer número dividido por 0 tende a ser infinito', '<br><br>';
   

    //Precedência de operadores (Priotidades).
    //() -> ** -> / * % -> + -
    echo 2 + 3 * 4, '<br>';
    echo (2+3) * 4, '<br>';
    echo 2 + 3 * 4 **/*(Elevado)*/ 2, '<br>';
    echo ((2 + 3) * 4) ** 2;


   
    

?>