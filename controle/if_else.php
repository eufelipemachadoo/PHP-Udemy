<div class="titulo">If Else </div>

<?php

    if(true)/* "" aspas juntas é resolvido como falso e aspas com espaço é resolvido verdadeiro*/{
        echo "Serei impresso? <BR>";
    }



    if (false){
        echo "Verdadeiro - Parte A<br>";
        echo "Verdadeiro - Parte B<br>";
    }
    else{
        echo "Falso - Parte A<br>";
        echo "Falso - Parte B<br>";

    }


    if (false){
        echo "Passo A<br>";
    }
    elseif(false){
        echo "Passo B<br>";
    }
    elseif(false){
        echo "Passo C<br>";
    }
    elseif(false){
        echo "Passo D<br>";
    }
    elseif(false){
        echo  "Passo E<br>";
    }
    else
    {
        echo "Último Passo<br>";
    }

    echo "Fim <br>";

    
?>