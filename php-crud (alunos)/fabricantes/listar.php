<?php
require_once "../src/funcoes-fabricantes.php";
$listaDeFabricantes = lerFabricantes($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Fabricantes</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | SELECT</h1>
        <hr>
        <h2>Lendo e carregando todos os fabricantes</h2>

        <p><a href="inserir.php" style="color:Blue"><button type="button" class="btn btn-primary">Inserir um novo fabricante</button></a></p>

        <?php if(isset($_GET['status'])&& $_GET['status'] == 'sucesso'){?>
        <p>Fabricante atualizado com sucesso!</p>
        <?php } ?>

        <table>
            <caption>Lista de Fabricantes</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // echo "<pre>";
                    // var_dump($resultado); // Teste
                    // echo "<pre>";

                    foreach($listaDeFabricantes as $fabricante) {
                ?>
                <tr>
                    <td> <?=$fabricante['id']?> </td>
                    <td> <?=$fabricante['nome']?> </td>

                    <td><a href="atualizar.php?id=<?=$fabricante['id']?>" style= "color:blue"><button type="button" class="btn btn-success">Atualizar</button></a></td>
                    <td> <a class="escluir" href="excluir.php?id=<?$fabricante['id']?>" style= "color:red"><button type="button" class="btn btn-danger">Excluir</button></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <p><a href="../index.html"><button type="submit" class="btn btn-warning">Home</button></a></p>
    </div>

    <script src="../js/confirm.js"></script>
</body>
</html>