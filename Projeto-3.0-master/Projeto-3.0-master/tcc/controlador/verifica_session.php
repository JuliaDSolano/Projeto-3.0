<?php
include 'conexao.php';
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
    header('location:login.phtml');
    exit();

}

?>