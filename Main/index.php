
<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <title>Infinity Play</title>
</head>

<body bgcolor="#275673" text="#010a24">

<header style="background-color: #275673; padding: 15px 30px; text-align: center;">
    <img src="logo.png" alt="Logo do site" style="height: 40px; width: auto; vertical-align: middle;">
    <h1 style="font-weight: bold; font-size: 24px; display: inline; margin-left: 10px;">
        Infinity Play
    </h1>

</header>

<main>

<h2 align="center">Sobre Nós</h2>

<p align="center">
A <b>Infinity Play</b> é uma loja online que conecta jogadores a um universo de jogos, tecnologia e entretenimento, oferecendo uma experiência prática, segura e diversificada. Nosso objetivo é proporcionar novas experiências e diversão para todos os estilos de jogadores.
</p>

<hr>

<h2 align="center">Nossa Missão</h2>

<p align="center">
Oferecer uma experiência de compra prática e acessível, com produtos e jogos para diferentes perfis de jogadores.
</p>

<hr>

<h1 align="center">Formulário de Cadastro</h1>

<form action="tela_principal.php" method="POST">

<p>
<label for="nome"><b>Nome:</b></label><br>
<input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
</p>

<p>
<label for="data"><b>Data de nascimento:</b></label><br>
<input type="date" id="data" name="data" required>
</p>

<p>
<label for="cpf"><b>CPF:</b></label><br>
<input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
</p>

<p>
<label for="email"><b>Email:</b></label><br>
<input type="email" id="email" name="email" placeholder="Digite seu email" required>
</p>

<p>
<label for="senha"><b>Senha:</b></label><br>
<input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
</p>

<p align="center">
<button type="submit" style="background-color: #75bfeb; padding: 10px 25px;">Cadastrar</button>
</p>

</form>

</main>

<footer>
<hr>
<p align="center">&copy; 2026 Infinity Play - Todos os direitos reservados.</p>
</footer>

</body>
</html>
```