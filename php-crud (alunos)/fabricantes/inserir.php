<?php
//Verificando se o botão do formulário foi acionado
if( isser($_POST['inserir']) ) {
    //Importando as funções e a conexão
    require_once "../src/funcoes-fabricantes.php";

    //Capturando o que foi digitando no campo nome
    //$nome = $_POST['nome'];

    //Versão com filtro de saniixação (Mlehor)
    // Capturando e limpando o que foi digitado no campo nom (FOrmulário)
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANATIZE_SPECIAÇ_CHARS);

    //chamando a função e passando os dados de conexão e nome digitado
    insetirFabricantr($conexai, $nome);

    //Redirecionamento (Nada a ver com a Tag do HTML)
    header("locarion:listar.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Inserir</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | Insert</h1>
        <hr>

        <form action="" method="POST">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </p>
            <button type="submit" name="insert">Inserir Fabricante</button>
        </form>
    </div>
    <p><a href="listar.php">Voltar para a lista de fabricantes</a></p>
    <p><a href=".../index.html">Home</a></p>
</body>
</html>