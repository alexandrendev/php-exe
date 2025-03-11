<?php include 'funcoes.php'; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="grid-container">
    <div class="grid-item">
        <h2>Verificador de Paridade</h2>
        <form method="POST">
            <input type="number" name="numero" placeholder="Digite um número" required>
            <button type="submit" name="verificar_paridade">Verificar</button>
        </form>
        <?php if (isset($_POST['verificar_paridade'])) echo "<p>Resultado: " . verificarParidade($_POST['numero']) . "</p>"; ?>
    </div>

    <div class="grid-item">
        <h2>Calculadora de Desconto</h2>
        <form method="POST">
            <input type="number" step="0.01" name="preco" placeholder="Preço do produto" required>
            <button type="submit" name="calcular_desconto">Calcular</button>
        </form>
        <?php if (isset($_POST['calcular_desconto'])) echo "<p>Preço final: R$ " . calcularDesconto($_POST['preco']) . "</p>"; ?>
    </div>

    <div class="grid-item">
        <h2>Classificação Etária</h2>
        <form method="POST">
            <input type="number" name="idade" placeholder="Digite sua idade" required>
            <button type="submit" name="classificar_idade">Classificar</button>
        </form>
        <?php if (isset($_POST['classificar_idade'])) echo "<p>Classificação: " . classificarIdade($_POST['idade']) . "</p>"; ?>
    </div>

    <div class="grid-item">
        <h2>Jogo de Adivinhação</h2>
        <form method="POST">
            <input type="number" name="palpite" placeholder="Digite seu palpite (1-100)" required>
            <button type="submit" name="verificar_palpite">Enviar</button>
        </form>
        <?php if (isset($_POST['verificar_palpite'])) echo "<p>Resultado: " . verificarPalpite($_POST['palpite']) . "</p>"; ?>
    </div>

    <div class="grid-item">
        <h2>Sistema de Reservas</h2>
        <form method="POST">
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
        <?php if (isset($_POST['calcular_reserva'])) echo "<p>Preço final: R$ " . calcularReserva($_POST['tipo'], $_POST['temporada'], $_POST['precoBase']) . "</p>"; ?>
    </div>

    <div class="grid-item">
        <h2>Calculadora de Imposto</h2>
        <form method="POST">
            <input type="number" step="0.01" name="salario" placeholder="Digite seu salário" required>
            <button type="submit" name="calcular_imposto">Calcular</button>
        </form>
        <?php if (isset($_POST['calcular_imposto'])) echo "<p>Imposto devido: R$ " . calcularImposto($_POST['salario']) . "</p>"; ?>
    </div>

    <div class="grid-item">
        <h2>Classificação de Produto</h2>
        <form method="POST">
            <input type="text" name="produto" placeholder="Digite um produto" required>
            <button type="submit" name="classificar_produto">Classificar</button>
        </form>
        <?php if (isset($_POST['classificar_produto'])) echo "<p>Categoria: " . classificarProduto($_POST['produto']) . "</p>"; ?>
    </div>
    <div class="grid-item">
    <h2>Sistema de Notas Escolares</h2>
    <form method="POST">
        <input type="number" step="0.01" name="provas" placeholder="Nota das Provas" required>
        <input type="number" step="0.01" name="trabalhos" placeholder="Nota dos Trabalhos" required>
        <input type="number" step="0.01" name="participacao" placeholder="Nota da Participação" required>
        <button type="submit" name="calcular_nota">Calcular Nota</button>
    </form>
    <?php 
    if (isset($_POST['calcular_nota'])) {
        echo "<p>Resultado: " . calcularNotaFinal($_POST['provas'], $_POST['trabalhos'], $_POST['participacao']) . "</p>"; 
    }
    ?>
</div>

<div class="grid-item">
        <h2>Calculadora de Tarifa de Energia</h2>
        <form method="POST">
            <input type="number" name="consumo_energia" placeholder="Consumo em kWh" required>
            <button type="submit" name="calcular_tarifa">Calcular</button>
        </form>

        <?php 
        if (isset($_POST['calcular_tarifa'])) {
            $consumo = $_POST['consumo_energia'];
            echo "<p>Tarifa: R$ " . calcularTarifaEnergia($consumo) . "</p>";
        }
        ?>
    </div>
    <div class="grid-item">
    <h2>Bilhetagem Eletrônica</h2>
    <form method="POST">
        <input type="number" name="idade" placeholder="Digite sua idade" required>
        <select name="tipo">
            <option value="Outro">Outro</option>
            <option value="Estudante">Estudante</option>
        </select>
        <button type="submit" name="calcular_tarifa">Calcular Tarifa</button>
    </form>
    <?php 
    if (isset($_POST['calcular_tarifa'])) {
        echo "<p>" . calcularTarifa($_POST['idade'], $_POST['tipo']) . "</p>"; 
    }
    ?>
</div>

    
</div>

</body>
</html>
