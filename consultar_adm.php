<?php 
include "conexao.php";


$sql = "SELECT * FROM tb_funcionarios WHERE setor='Administrativo'";

$consultar = $pdo->prepare($sql);

try {
    $consultar->execute();
    $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultados  as $item) {
                $matricula = $item['matricula'];
                $nome = $item['nome'];
                $setor = $item['setor'];
                $situacao = $item['situacao'];
                
                echo "


                      <div class='cartoes'>
                      
                            <h3>Matrícula: <span class='matricula_func'>$matricula</span></h3>
                            <p>Nome: <span class='nome_func'>$nome</span></p>
                            <p>Setor: <span class='setor_func'>$setor</span></p>
                            <p>Situação: <span class='situacao_func'>$situacao</span></p>
                      </div>
                ";
            }

} catch (PDOException $erro) {
    echo "Falha ao consultar resultados! " . $erro->getMessage();
}
?>
