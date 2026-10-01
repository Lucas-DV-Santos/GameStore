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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela principal</title>
</head>

<body style="background-color: #D8B4FE;">
    <nav>
  <header>
    <h1>Bem-vindo à página principal</h1>
    <h2>Informações de usuário</h2>
    <p>Nome: <?= $_SESSION['usuario']['nome'] ?></p>
    <p>Data de nascimento: <?= $_SESSION['usuario']['data']?></p>
    <p>E-mail: <?=$_SESSION['usuario']['email']?></p>
  </header>

  
</nav>
<main>
    <ul>
    <li><a href="biblioteca.php">Biblioteca</a></li>
    <li><a href="loja.php">Loja</a></li>
    <li><a href="index.php">Sair</a></li>
  </ul>
</main>
</body>
</html>