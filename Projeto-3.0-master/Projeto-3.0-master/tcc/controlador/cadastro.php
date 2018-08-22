
<?php
require_once "conexao.php";
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$inserir = "INSERT INTO usuario (cod_usuario, nome, email, senha) VALUES (NULL, '$nome', '$email', '$senha');";

mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));



$cpf = $_POST["cpf"];
$especificacao = $_POST["especificacao"];

$inserir2 = "INSERT INTO fisico (cpf,especificacao, cod_usuario) VALUES ('$cpf', '$especificacao', LAST_INSERT_ID());";

mysqli_query($conexao, $inserir2) or die (mysqli_error($conexao));

$razao_social= $_POST["razao_social"];
$cnpj = $_POST["cnpj"];
$inserir3 = "INSERT   INTO juridico (razao_social,cnpj, cod_usuario) VALUES ('$razao_social', '$cnpj', LAST_INSERT_ID());";

mysqli_query($conexao, $inserir3) or die (mysqli_error($conexao));

echo "Você foi cadastrado com sucesso. Clique <a href='../login.phtml'>aqui</a> para fazer log-in.";
?>