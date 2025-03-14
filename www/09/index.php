<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sistema de Notas Escolares</h2>
    <form action="controller.php" method="POST">
        <input type="number" step="0.01" name="provas" placeholder="Nota das Provas" required>
        <input type="number" step="0.01" name="trabalhos" placeholder="Nota dos Trabalhos" required>
        <input type="number" step="0.01" name="participacao" placeholder="Nota da Participação" required>
        <button type="submit" name="calcular_nota">Calcular Nota</button>
    </form>
</body>
</html>