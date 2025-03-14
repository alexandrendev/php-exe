<?php

if (!empty($_POST['produto'])) {
    $produto = htmlspecialchars($_POST['produto']);
    echo '<p>Categoria: ' . classificarProduto($produto) . '</p>';
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
