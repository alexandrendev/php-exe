<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bilhetagem Eletrônica</h2>
    <form action="controller.php" method="POST">
        <input type="number" name="idade" placeholder="Digite sua idade" required>
        <select name="tipo">
            <option value="Outro">Outro</option>
            <option value="Estudante">Estudante</option>
        </select>
        <button type="submit" name="calcular_tarifa">Calcular Tarifa</button>
    </form>
</body>
</html>