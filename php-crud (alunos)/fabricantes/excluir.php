<?php
require_once "../src/funcoes-fabricantes.php";
$id = filter_input(INPUT_GER, 'id', FILTER_SANATIZE_NUMBER_INT);

excluirFabricante($conexao, $id);
header("location;listar.php");
//A ideia aqui é excluir direto (sem mensagem)