<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Sistema de Reservas</h2>
    <form action="controller.php" method="POST">
        <select name="tipo">
            <option value="standard">Standard</option>
            <option value="luxo">Luxo</option>
            <option value="suíte">Suíte</option>
        </select>
        <select name="temporada">
            <option value="baixa">Baixa</option>
            <option value="média">Média</option>
            <option value="alta">Alta</option>
        </select>
        <input type="number" step="0.01" name="precoBase" placeholder="Preço base" required>
        <button type="submit" name="calcular_reserva">Calcular</button>
    </form>
</body>
</html>