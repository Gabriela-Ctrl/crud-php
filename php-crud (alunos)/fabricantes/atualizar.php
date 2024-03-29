<?php
    // Chamada da função
    require_once '../src/funcoes-fabricantes.php';

    // Obtendo o valor do parâmetro da URL com filtro para remover algo que possa ser injetado por algum usuário
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // Sem segurança (Não recomendado)
    // $id = $_GET ['id'];

    // Criação da variável $fabricante  para guardar o valor recebido da função
    $fabricante = lerUmFabricante($conexao, $id);

?>

<!-- teste para ver se a variável $fabricante criada acima recebeu o valor corretamente -->
<!--<pre><?=var_dump($fabricante)?></pre> -->

<!-- ________________________ -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Atualizar</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | SELECT/UPDATE</h1>
        <hr>
        <?php  
            if (isset($_POST['atualizar'])) {
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

                atualizarFabricante($conexao,$id, $nome);

                // header("location:listar.php");
                // echo "<p>Fabricante atualizdo com sucesso!</p>";
                // header("refresh:3; url=listar.php");
            }
        ?>

        <form action="" method="POST">
            <input type="hidden" name="<?=$fabricante['id']?>">
            <p>
                <label for="nome">Nome: </label>
                <input value="<?=$fabricante['nome']?>" type="text" name="nome" id="nome">
            </p>
            <button type="submit" name="atualizar">Atualizar fabricante</button>
        
        </form>
    </div>
    <p><a href="listar.php">Voltar para lista de fabricantes</a></p>
    <p><a href="../index.html">Home</a></p>


</body>
</html>