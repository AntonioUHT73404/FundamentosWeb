<?php
include 'connect.php';


$id = $_GET['idPessoa'];

$sql="delete from PESSOA where idPessoa=$id;";
mysqli_query($con, $sql);


header('location:viewallPessoa.php');

?>