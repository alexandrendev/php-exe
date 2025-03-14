<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculadora de Desconto</h2>
    <form action="controller.php" method="POST">
        <input type="number" step="0.01" name="preco" placeholder="Preço do produto" required>
        <button type="submit" name="calcular_desconto">Calcular</button>
    </form>
</body>
</html>