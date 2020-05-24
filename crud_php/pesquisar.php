<?php

include_once("conexao.php");
include './inc/header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD</title>		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>		
	</head>
	<body>
		<br><br>
		<div class="container">
		<h2>Pesquisar Cliente</h2>
		<form class="form-horizontal" method="POST" action="">
			<label class="control-label col-sm-2">Nome: </label>
			<div class="col-sm-10">
			<input type="text" class="form-control"  name="nome" placeholder="Digite o nome " ><br>
			</div>
			
			
			<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-default" name="SendPesqUser" value="Pesquisar">
			</div>
			</div>
		</form>
		</div>
		<?php
		$SendPesqUser=filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_usuario="select * from clientes where nome LIKE '%$nome%'";
			 $resultado_usuario=mysqli_query($conn,$result_usuario);
			 while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				echo "ID:"  .$row_usuario['id']. "<br>";
				echo "NOME : " . $row_usuario['nome']."<br>";
				echo "ENDERECO : " . $row_usuario['endereco']."<br>";
				echo "NUMERO : " . $row_usuario['numero']."<br>";
				echo "TELEFONE : " . $row_usuario['telefone']."<br>";
				echo "EMAIL : " . $row_usuario['email']."<br>";
				echo "USUARIO : " . $row_usuario['usuario']."<br>";
				echo "SENHA : " . $row_usuario['senha']."<br>";
				echo "<a href='edit_usuario.php?id=" . $row_usuario['id']."'>Editar</a><br>";
			    echo "<a href='proc_apagar_usuario.php?id=" . $row_usuario['id']."'>Excluir</a><br><hr>";
				}

		}

		?>

	</body>
</html>