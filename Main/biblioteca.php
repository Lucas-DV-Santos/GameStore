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
<body style="background-color: #D8B4FE">
    <h1>Biblioteca</h1>
    <a href="tela_principal.php">Voltar para o início</a>
    <br><br>
    <h2>Seus jogos:</h2>
    <ul>
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
    <a href="loja.php">Voltar para loja</a>
</body>
</html>