<?php
include "db.php";

function salvarCEP($cep,$logradouro,$bairro,$localidade,$uf,$estado,$regiao,$ddd){
    global $conexao;

    $sql = "INSERT INTO `enderecos`(`id`, `cep`, `logradouro`, `bairro`, `loclidade`, `uf`, `estado`, `regiao`, `ddd`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')";

    $resultado = $conexao->query($sql);
}

function buscartabela($tabela) {
    global $conexao;
    $sql = "SELECT * FROM '$tabela'";
    $resultado = $conexao->query($sql);
    return $resultado;
}
?>