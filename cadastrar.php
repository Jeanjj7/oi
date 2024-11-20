<?php
include "conexao.php";

$nome = $_POST['nome'];
$setor = $_POST['setor']; 



$sql = "INSERT INTO tb_funcionarios (nome, setor) 
        VALUES ('$nome', '$setor')";


$inserir = $pdo->prepare($sql);

try {
    $inserir->execute();
    echo "Funcionário cadastrado com sucesso!";
} catch (PDOException $erro) {

    echo "Erro ao cadastrar funcionário: " . $erro->getMessage();
}
?>
