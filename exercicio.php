<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">



<head>
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/exercicio.css" rel="stylesheet">

     <title>Exercício</title>
</head>



<body class="exercicio">

    <header class="cabecalho">
        <h1>CURSO PHP </h1>
        <h2>Visualização do Exercício</h2>
    </header>

    <nav class="navegacao">
        <a href="<?= "/{$_GET['dir']}/{$_GET['file']}.php"?>" class="verde"> Sem formatação</a>
        <a href="index.php" class="vermelho"> Voltar</a>
        
    </nav>

    <principal class="principal">
            
            
            
            
        <div class="conteudo">
   
           <?php
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
           ?>

        </div>


    </principal>


    <footer class="rodape">
        C0D3R &amp; ALUNOS 2021

    </footer>
    


</body>


</html>