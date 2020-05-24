<?php
session_start();
include_once("conexao.php");

$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$result_usuario="delete from clientes where id='$id'";
$resultado_usuario=mysqli_query($conn,$result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi apagado com sucesso</p>";
	header("Location: index.php");
}


?>
