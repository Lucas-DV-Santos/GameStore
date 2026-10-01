<?php 

session_start();


if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = [
        'nome' => $_POST['nome'],
        'data' => $_POST['data'],
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
    ];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela principal</title>
</head>

<body bgcolor="#F3E8FF">
    <nav>
        <header>
            <h1 align="center">Bem-vindo à página principal</h1>
            <h2 align="center">Informações de usuário</h2>
        </header>
    </nav>
    <main>
        <section>
            <h2>👤 Meu Perfil</h2>
            <p>
                <strong>Nome:</strong><br>
                <?= $_SESSION['usuario']['nome'] ?>
            </p>
            <p>
                <strong>Data de nascimento:</strong><br>
                <?= $_SESSION['usuario']['data'] ?>
            </p>
            <p>
                <strong>E-mail:</strong><br>
                <?= $_SESSION['usuario']['email'] ?>
            </p>
        </section>
        <hr>
        <nav>
            <h2>Menu</h2>
            <ul>
                <li>
                    <a href="biblioteca.php">📚 Biblioteca</a>
                </li>
                <li>
                    <a href="loja.php">🛒 Loja</a>
                </li>
                <li>
                    <a href="index.php">🚪 Sair</a>
                </li>
            </ul>
        </nav>
    </main>
</body>
</html>