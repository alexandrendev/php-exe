<?php
function verificarParidade($numero) {
    return ($numero % 2 == 0) ? "Par" : "Ímpar";
}

function calcularDesconto($preco) {
    return ($preco > 200) ? $preco * 0.85 : $preco;
}

function classificarIdade($idade) {
    if ($idade <= 11) return "Criança";
    if ($idade <= 17) return "Adolescente";
    if ($idade <= 59) return "Adulto";
    return "Idoso";
}


function calcularImposto($salario) {
    $faixas = [
        [2259.20, 0, 0],
        [2828.65, 0.075, 169.44],
        [3751.05, 0.15, 381.44],
        [4664.68, 0.225, 662.77],
        [PHP_INT_MAX, 0.275, 896.00]
    ];
    foreach ($faixas as [$limite, $aliquota, $deducao]) {
        if ($salario <= $limite) {
            return ($salario * $aliquota) - $deducao;
        }
    }
}

function classificarProduto($tipo) {
    $categorias = [
        "Celular" => "Eletrônicos",
        "TV" => "Eletrônicos",
        "Camiseta" => "Vestuário",
        "Calça" => "Vestuário",
        "Pão" => "Alimentos",
        "Leite" => "Alimentos"
    ];
    return $categorias[$tipo] ?? "Categoria desconhecida";
}

session_start();
if (!isset($_SESSION['numeroSecreto'])) {
    $_SESSION['numeroSecreto'] = rand(1, 100);
}
function verificarPalpite($palpite) {
    $secreto = $_SESSION['numeroSecreto'];
    if ($palpite == $secreto) {
        unset($_SESSION['numeroSecreto']);
        return "Correto!";
    }
    return ($palpite > $secreto) ? "Muito alto" : "Muito baixo";
}


function calcularTarifa($idade, $tipo) {
    $precoBase = 4.00;

    if ($tipo == "Estudante") {
        $desconto = 0.50;
    } elseif ($idade >= 60) {
        $desconto = 0.40;
    } else {
        $desconto = 0;
    }
    $valorFinal = $precoBase * (1 - $desconto);
    return "Valor da passagem: R$ " . number_format($valorFinal, 2, ",", ".");
}


function calcularTarifaEnergia($consumo) {
    if ($consumo <= 100) {
        $tarifa = 0.60;
    } elseif ($consumo > 100 && $consumo <= 500) {
        $tarifa = 0.70;
    } else {
        $tarifa = 0.80;
    }

    return number_format($tarifa * $consumo, 2, ',', '.');
}

function calcularNotaFinal($provas, $trabalhos, $participacao) {
    $notaFinal = ($provas * 2 + $trabalhos * 1 + $participacao * 0.5) / 3.5;

    if ($notaFinal >= 7) {
        return "Aprovado com nota: " . number_format($notaFinal, 2);
    } elseif ($notaFinal >= 5) {
        return "Recuperação com nota: " . number_format($notaFinal, 2);
    } else {
        return "Reprovado com nota: " . number_format($notaFinal, 2);
    }
}


function calcularReserva($tipo, $temporada, $precoBase) {
    $taxasTemporada = ["baixa" => 0.5, "média" => 0.3, "alta" => 0.1];
    return $precoBase * (1 + ($taxasTemporada[$temporada] ?? 0));
}

?>