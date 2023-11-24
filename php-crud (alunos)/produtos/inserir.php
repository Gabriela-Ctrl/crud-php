<?php
    if( isset($_POST['inserir']) ) {
        require_once "../src/funcoes-fabricantes.php";

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

        inserirFabricante($conexao, $some);

        header("location:listar.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-AU-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Fabricantes - inserir</title>
    </head>
    <body>
        <div class="container">
            <h1>Fabricantes | Insert</h1>
            <hr>

            <form action="" method="POST">
                <p>
                    <label for="name">Nome:</label>
                    <input type="text" name="nome" id="nome">  
                </p>
                <button type="submit" name="inserir"> Inserir fabricante</button>               

            </form>
        </div>
        <p><a href="listar.php">Voltar para lista de fabricantes</a></p>
        <p><a href="../index.html">Home</a></p>
        
    </body>
</html>