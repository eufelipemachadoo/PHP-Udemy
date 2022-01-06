<div class="titu">Variáveis</div>


<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;

$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset ($somaDosNumeros); //verifica se a variável está setada

unset ($somaDosNumeros);
echo !isset ($somaDosNumeros);
echo '<br>';
echo var_dump($somaDosNumeros);

$variavel = "Agora eu sou uma string";
echo '<br>' . $variavel;

//Nome de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; //Porém não aconselhavel
//$6var = 'invalida';
//$%var7 = 'invalida';
//$var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]); //Identifica dados da variável 

?>