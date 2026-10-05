<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$faixa_etaria = $_POST["faixa_etaria"];
$preco = $_POST["preco"];
$estoque = $_POST["estoque"];

$sql = "INSERT INTO brinquedos (nome_brinquedo, categoria_brinquedo, faixa_etaria, preco_brinquedo, estoque) VALUES (?, ?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);

$stmt->bind_param( "sssdi", $nome, $categoria, $faixa_etaria, $preco, $estoque);

$stmt->execute();

$stmt->close();
$conexao->close();

header("Location: ../index.php");
exit;

?>