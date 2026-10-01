<?php
session_start();
if (!isset($_SESSION['jogos'])) {
    $_SESSION['jogos'] = [];
}
function adicionarJogo($jogo) {
    if ($jogo != "") {
        $_SESSION['jogos'][] = $jogo;
    }
}
function removerJogo($indice) {
    unset($_SESSION['jogos'][$indice]);
    $_SESSION['jogos'] = array_values($_SESSION['jogos']);
}
if (isset($_POST['compra'])) {
    adicionarJogo($_POST['compra']);
}
if (isset($_POST['remover'])) {
    removerJogo($_POST['remover']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
</head>
    <body style="margin: 0; background-color: #DCEEFF;">
        <header style="background-color: #275673; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center;">
            <h1 style="color: white;">Infinity Play</h1>
            <h3 style="text-align: right;"><a href="tela_principal.php" style="color: white;">Voltar para o início</a></h3>
        </header>
    
    
    <br><br>
    <h2 style="margin-left: 30px">Seus jogos:</h2>
    <ul style="margin-left: 30px">
        <?php foreach ($_SESSION['jogos'] as $indice => $jogo): ?>
            <li>
                <?= $jogo; ?>
                <form action="biblioteca.php" method="POST" style="display: inline;">
                    <button type="submit" name="remover" value="<?= $indice; ?>">Remover</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <br>
    <a href="loja.php" style="margin-left: 30px">Voltar para loja</a>
</body>
</html>