<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
</head>
<body style="background-color: #D8B4FE">
    <header><h1>Loja</h1></header>

    <main>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROzzft2mJaE3CCN312nO5JzwJs5qRqPlvP7G48BjNeiUdIPmMc5RH5zn8&s=10" alt="Foto 1" width="200">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMcYmGCzIG6m1DQ3_3GDZGhDkGstLWhDKLwdbPK9IIIw&s=10" alt="Foto 2" width="200">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2wnmfRpxWyn336G_MgerXfzdqMlalZvXoQEOxdU0uCg&s" alt="Foto 3" width="200">
        <img src="https://m.media-amazon.com/images/I/71cj+QoJRKL._AC_UF1000,1000_QL80_.jpg" alt="Foto 3" width="200">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVoGdJ2CU3lv8WhXK-wuTRj1BQMTOL8Lj8Lx61WVU2yQ&s=10" alt="Foto 3" width="200">


        <br><br>
        <h3>Compre ou baixe: </h3>
        <form action="biblioteca.php" method="POST">
            <select name="compra" id="compra">
                <option value="">Selecione...</option>
                <option value="valorant">Valorant</option>
                <option value="csgo">CS-GO</option>
                <option value="Minecraft">Minecraft</option>
                <option value="gta6">GTA-6</option>
                <option value="roblox">Roblox</option>
            </select>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>