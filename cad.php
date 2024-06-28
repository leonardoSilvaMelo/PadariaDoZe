<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Cadastro de clientes / Emporio Padaria</h1>
    </header>

    <main class="text">
          <?php
        $nome = $_GET ["nome"];
        $sobrenome = $_GET["sobrenome"];
        $telefone = $_GET["telefone"];

        echo "<p> é um prazer te conhecer, a Empório Padaria agradece
        $nome $sobrenome! Entramos em contato com você!</p>"
        ?>
        <button class="text-js">
        <a href="javascript:history.go(-1)">voltar para página anterior
            
        </a>
        </button>
        

          
    </main>
    
</body>
</html>