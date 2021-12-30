<div class="titulo" center> Integração HTML</div> <!--Define uma div nomeada Integração HTML>-->

<h1 center>
    <?php /*Abre um BLOCO PHP*/
        echo 'Olá'; /*Imprime caracteres na tela.*/
        echo '<small> ';
        echo ' Mundo!';
    ?><!--fecha o BLOCO PHP -->

</h1>

<?= "<div azul center> Outra forma de me 'expressar'! </div>"?> <!--TAG PHP que valida somente um elemento-->
<br>
<div center><button><?= "Legal"?></button></div>

<style>

button{ /*Define a criação de um botão com os seguintes parâmetros*/
    padding: 5px 20px; /*5px na horizontal e 20 na vertical*/
    background-color: #4286f4; /*Cor de fundo azul*/
    color: #EEE; /*Cor da letra será branca*/
    font-weight: bold; /*A fonte será em negrito*/
    border-radius: 10px; /*Os cantos serão arredondados*/
    
}

[center] { /*Define um seletor chamado CENTER com as seguintes propriedades*/
    display: flex;
    justify-content: center;
            /*Sempre que esse seletor for chamado dentro de um elemento, os elementos recebem as propriedades do seletor*/
}

[azul]{ /*Define um seletor chamado AZUL com as seguintes propriedades*/
    color: #4286f4;
    /*Sempre que esse seletor for chamado dentro de um elemento, os elementos recebem as propriedades do seletor*/
}

[dobro]{ /*Define um seletor chamado DOBRO com as seguintes propriedades*/
    font-size: 2rm;
    /*Sempre que esse seletor for chamado dentro de um elemento, os elementos recebem as propriedades do seletor*/
}

</style>

