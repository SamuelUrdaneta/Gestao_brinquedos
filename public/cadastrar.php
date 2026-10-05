<?php

$nome = ["nome"];
$categoria = ["categoria"];
$faixa_etaria = ["faixa_etaria"];
$preco = ["preco"];
$estoque = ["estoque"];
$cadastrar = ["cadastrar"];

smtm = "INSERT INTO brinquedos (nome_brinquedo, categoria_brinquedo, faixa_etaria, preco_brinquedo, estoque, cadastrar_brinquedo) values(?, ?, ?, ?, ?)"

mysqli_querry($conexao, $sql);

header("Location: ../index.php");

?>