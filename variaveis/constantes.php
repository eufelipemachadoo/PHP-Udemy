<div class="titulo">Constantes</div>

<?php
    define('TAXA_DE_JUROS', 5.9); //Define uma constante (Sempre maiúsculo e separado por underline.) 
    echo TAXA_DE_JUROS;
    

    const NOVA_TAXA = 2.5;
    echo '<br>' . NOVA_TAXA;

    $valorVariavel = 2.8;
    //define ('NOVASSIMA_TAXA', $valorVariavel);
    //const NOVASSIMA_TAXA = $valorVariavel;

    const NOVASSIMA_TAXA = 2.8 + 1.2;
    echo '<br>' . NOVASSIMA_TAXA;
    echo '<br>' . PHP_VERSION;
    echo '<br>' . PHP_INT_MAX;

    echo '<br>Linha ' . __LINE__;
    echo '<br>' . __FILE__;
    echo '<br>' . __DIR__;



?>