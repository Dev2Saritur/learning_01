<?php
// Início do script PHP

// Função para formatar a data atual
function getCurrentDate() {
    return date('d/m/Y');
}

// Título da página
$pageTitle = "Bem-vindo à Minha Página PHP";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 50px;
        }
        .date {
            color: #555;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $pageTitle; ?></h1>
        <p class="date">Hoje é <?php echo getCurrentDate(); ?></p>
    </div>
</body>
</html>
