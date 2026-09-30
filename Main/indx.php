<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>GameStore</title>
</head>
<body>
    <header style="text-align: center"><h1>Infinity Play</h1></header>
    <main>
        <h1>Formulário de cadastro</h1>

        <form action="logica.php" method="POST">
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

            <select name="escolha" id="escolha">
                <option value="" selected disabled>Seleção</option>
                <option value="Login">Login</option>
                <option value="Cadastro">Cadastro</option>
            </select>
            <br><br>
            

            <button type="submit">Enviar</button>
            <br><br>
        </form>
    </main>
</body>
</html>