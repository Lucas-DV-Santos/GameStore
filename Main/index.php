<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="file:///C:/Users/44615323808/Downloads/download%20(3).png">
    <title>GameStore</title>
</head>
<body bgcolor="#275673" text="#010a24">
    <header style="display: flex; justify-content: center; align-items: center; gap: 15px; margin: 20px 0;">
        <img src="file:///C:/Users/44615323808/Downloads/download%20(3).png" alt="Logo Infinity Play" style="width: 60px; height: auto;">
        <h1 style="margin: 0;">Infinity Play</h1>
    </header>
    <hr>
    <main>
        <h2 style="text-align: center;">Sobre Nós:</h2>
        <p style="text-align: center;"> A <b>Infinity Play</b> é uma loja online que conecta jogadores a um universo de jogos, tecnologia e entretenimento,
             oferecendo uma experiência prática, segura e diversificada. Nosso objetivo é proporcionar novas experiências e
              diversão para todos os estilos de jogadores. ����</p>
        <hr>
        <h2>Nossa Missão:</h2>
        <p>Oferecer uma experiência de compra prática e acessível, com produtos e jogos para diferentes perfis de jogadores.</p>
        <hr>
        <h1>Formulário de cadastro</h1>

        <form action="tela_principal.php" method="POST">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            <br><br>

            <label for="data">Data de nascimento: </label>
            <input type="date" id="data" name="data" required>
            <br><br>

            <label for="cpf">CPF: </label>
            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00..." required>
            <br><br>

            <label for="email">Email: </label>
            <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            <br><br>



            <label for="senha">Senha: </label>
            <input type="text" id="senha" name="senha" placeholder="Digite sua senha" required>
            <br><br>


       
            <button style="background-color: #75bfeb;" type="submit">Enviar</button>
            <br><br>
        </form>
    </main>
        <footer style="text-align: center;">
         <p>&copy; 2026 Infinity Play - Todos os direitos reservados.</p>
        </footer>
</body>
</html>