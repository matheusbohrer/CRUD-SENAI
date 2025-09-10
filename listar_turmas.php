<?php
include("bd.php"); // Ele tenta incluir (puxar, executar) este arquivo. Se ele não encontrar, ele apenas vai gerar uma mensagem de WARNING. Ultilizar quando o arquivo não é critico para a funcionalização do sistema.
include_once("bd.php"); // Ele também tenta incluir, mas apenas uma vez. Ou seja, se em algum momento passado este arquivo  já foi incluído, não vai chamar de novo. Ultilizar para quando você precisa incluir uma biblioteca ou função que não pode ser replicada.
require("bd.php"); // Ele tenta chamar o arquivo. Caso não encontre, ele gera um FATAL ERROR e para a execução da página. Ultilizar para arquivos essenciais do sistema.
require_once("bd.php"); // Ele vai tentar incluir somente se o arquivo não tiver sido chamado antes. Caso ele não encontre o arquivo, gera FATAL ERROR. Ultilizar para arquivos essenciais que não podem ser carregados mais de uma vez.

$sql = "SELECT * FROM turmas=";
$resultado = $conn->query($sql);

echo "<pre>";
var_dump($resultado);
echo "</pre>";

if($resultado && $resultado->num_rows >= 1) {
    $turmas = $resultado->fetch_all(MYSQLI_ASSOC);

    echo "<pre>";
    print_r($turmas);
    echo "</pre>";
} else {
    echo "<div> Não há turmas cadastradas! </div>";
}

$resultado->free();
$conn->close();

?>
