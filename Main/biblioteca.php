<?php

$jogo = $_POST['compra'] ;
$jogos = [];
$jogos[] = $jogo;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
</head>
<body style="background-color: #D8B4FE">
    <header><h1>Biblioteca</h1></header>

    <main>
        <ul>
            <li><a href="tela_principal.php">Voltar</a></li>
            <li><a href="loja.php">Pocurar na loja</a></li>
        </ul>
        <h2>Seus jogos: </h2>
        <p>
        <ul></ul>
            <?php
            print_r($jogos)
            ?>
            
            
        </p>
    </main>

</body>
</html>