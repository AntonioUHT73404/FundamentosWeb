<?php
include 'connect.php';


$nomePessoa=$_POST['nomePessoa'];
$mailPessoa=$_POST['mailPessoa'];
$idadePessoa=$_POST['idadePessoa'];

$sql="insert into Pessoa (nomePessoa, mailPessoa, idadePessoa) values ('$nomePessoa','$mailPessoa', $idadePessoa)";
mysqli_query($con, $sql);


header('location:viewallPessoa.php');

?>