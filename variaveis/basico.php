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

?>