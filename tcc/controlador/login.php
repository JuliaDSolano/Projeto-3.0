<?php
include 'conexao.php';

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('location:../login.phtml');
    exit();
};

$email = mysqli_real_escape_string($conexao, $_POST[email]);
$senha = mysqli_real_escape_string($conexao, $_POST[senha]);

$query = "select * from usuario where email = '{$email}' and senha = '{$senha}'";

$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);

if($row >0){
    $_SESSION['email'] = $email;
    header('location:../perfil.phtml');
    exit();

}   else {
    header('location:../cadastro.phtml');
    exit();
}
?>