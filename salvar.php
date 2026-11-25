<?php 
include "api.php";
include "acoes.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo $_POST['cep'];
    $cep = $_POST['cep'];
    $endereco = buscarCep($cep);

    salvarCEP($endereco['cep'],$endereco['lodradoura'],$endereco['bairro'],$endereco['localidade'],$endereco['uf'],$endereco['estado'],$endereco['regiao'],$endereco['ddd']);

    $voltar = $_SERVER['HTTP_REFERER'] ?? "index.php";
    header("Location: $voltar");
    exit;
}
?>