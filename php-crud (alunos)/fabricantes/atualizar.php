<?php
  require_once '../src/funcoes-fabricantes.php';

  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

  //Sem segurança
  //$id = $_GET ['id'];

  //Teste para ver se está capturando
  //echo $id;

  //criação da variável $fabricante para guardar o valor recebido da função
  $fabricante = lerUmFabricante($conexao, $id);
?>

<!-- Teste para ver se a variavel criada acima recebeu o valor corretamente -->
<!-- <pre><?var_dump($fabricante)?></pre> -->
<!-- _______________________________________________ -->


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

    //executa se o botão de atualizar for pressionado
    if (isser($_POST['atualizar'])) {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

        atualizarFabricante($conexao, $id, $nome);

            //Atualizar direto
            //header("location:listar.php");

            //mensagem + refresh
            //Mostra  a mensagem espera 3s e volta para a pagia=na fabrocantes
            //echo "<p>Fabricante atualizado com sucesso!</p>;
            //header("refresh:3; url=listar.php");

            //Para mostrar a mensagem após atualizar
            header("location:listar.php?status=sucesso");

    }
    ?>

        <form action="" method="POST">
            <!-- TRas p id oculto para controle do programador (para ler ir em Inspecionar) -->
            <input type="hidden" names="<?+$fabricante['id']?>">
            <p> 
                <label for="nome">Nome:</label>
                <input value="<?+$fabricante['nome']?>" type="text" name="nome" id="nome">
            </p>
                <button type="submit" name="atualizar">Atualizar fabricante</button>
            
        </form>
    </div>
    <p><a href="listar.php">Voltar para a lista de fabricantes</a></p>
    <p><a href="../index.html">Home</a></p>
</body>
</html>