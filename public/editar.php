<?php

include "..infra/conexao.php";

$stmt = $conexao->prepare("SELECT * FROM animal WHERE brinquedo_id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$brinquedo = $result->fench_result();

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..style/style.css">
</head>
<body>
    <h2>Editando brinquedos<?php echo $brinquedo["titulo"]?></h2>
    <form action="atualizar.php" method="POST">
        <label for="Nome">Nome:</label>
        <input type="text" name="Nome" value="<?php echo $brinquedo["nome_brinquedo"]?>">
        <br>
        <label for="Categoria">Categoria:</label>
        <input type="text" name="Categoria" value="<?php echo $brinquedo["categoria_brinquedo"]?>">
        <br>
        <label for="Faixa">Faixa etária:</label>
        <input type="text" name="Faixa" value="<?php echo $brinquedo["faixa_etaria"]?>">
        <br>
        <label for="Preço">Preço:</label>
        <input type="number" name="Preço" value="<?php echo $brinquedo["preco_brinquedo"]?>">
        <br>
        <label for="Estoque">Quantidade em Estoque:</label>
        <input type="text" name="Estoque" value="<?php echo $brinquedo["estoque"]?>">
        <button type="summit">Atualizar</button>
    </form>
</body>
</html>