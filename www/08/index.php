<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculadora de Tarifa de Energia</h2>
    <form action="controller.php" method="POST">
        <input type="number" name="consumo_energia" placeholder="Consumo em kWh" required>
        <button type="submit" name="calcular_tarifa">Calcular</button>
    </form>
</body>
</html>