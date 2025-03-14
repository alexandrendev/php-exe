<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Jogo de Adivinhação</h2>
    <form action="controller.php" method="POST">
        <input type="number" name="palpite" placeholder="Digite seu palpite (1-100)" required>
        <button type="submit" name="verificar_palpite">Enviar</button>
    </form>
</body>
</html>