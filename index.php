<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Brinquedos</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <h1>Getão Brinquedos</h1>
    </header>
    <h2>Adicione um novo Brinquedo</h2>
    <form action="public/cadastrar.php" method="POST">
        <label for="Nome">Nome:</label>
        <input type="text" name="Nome">
        <br>
        <label for="Categoria">Categoria:</label>
        <input type="text" name="Categoria">
        <br>
        <label for="Faixa">Faixa etária:</label>
        <input type="text" name="Faixa">
        <br>
        <label for="Preço">Preço:</label>
        <input type="number" name="Preço">
        <br>
        <label for="Estoque">Quantidade em Estoque:</label>
        <input type="text" name="Estoque">
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <div>
        <h2>Brinquedos cadastrados</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Faixa Etária</th>
                <th>Preço</th>
                <th>Quatidade em Estoque</th>
            </tr>
        </table>
    </div>
</body>
</html>