<?php
include 'connect.php';


$id = $_POST['IdPessoa'];
$nomePessoa=$_POST['nomePessoa'];
$mailPessoa=$_POST['mailPessoa'];
$idadePessoa=$_POST['idadePessoa'];


$sql="update from Pessoa set nomePessoa='$nomePessoa', mailPessoa='$mailPessoa', idadePessoa=$idadePessoa where IdPessoa={$id}";
mysqli_query($con, $sql);


header('location:viewallPessoa.php');

?>