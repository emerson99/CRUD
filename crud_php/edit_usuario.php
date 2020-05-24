<?php
session_start();
include_once("conexao.php");
include './inc/header.php';
$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$result_usuario="select * from clientes where id='$id'";
$resultado_usuario=mysqli_query($conn,$result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD </title>	
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
	<div class="container">
		<br><br>
		<h2>Editar Cliente</h2>
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		?>
			<form class="form-horizontal" method="POST" action="proc_edit_usuario.php">
			
			<input type="hidden" name="id" placeholder="Digite o nome completo" value="<?php echo $row_usuario['id'];?>"><br>
			<div class="form-group">
			<label class="control-label col-sm-2">Nome: </label>
			<div  class="col-sm-10">
			<input type="text" name="nome" class="form-control" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome'];?>"><br>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-sm-2">Endereco: </label>
			<div  class="col-sm-10">
			<input type="text" name="endereco" class="form-control" placeholder="Digite o seu melhor endereco" value="<?php echo $row_usuario['endereco'];?>"><br>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-sm-2">Numero: </label>
			<div  class="col-sm-10">
			<input type="number" name="numero" class="form-control" placeholder="Digite o seu melhor numero" value="<?php echo $row_usuario['numero'];?>"><br>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-sm-2">Telefone: </label>
			<div  class="col-sm-10">
			<input type="telefone" name="telefone" class="form-control" placeholder="Digite o seu melhor telefone" value="<?php echo $row_usuario['telefone'];?>"><br>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-sm-2">E-mail: </label>
			<div  class="col-sm-10">
			<input type="email" name="email" class="form-control" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email'];?>"><br>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-sm-2">Usuario: </label>
			<div  class="col-sm-10">
			<input type="text" name="usuario" class="form-control" placeholder="Digite o seu melhor usuario" value="<?php echo $row_usuario['usuario'];?>"><br>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-sm-2">Senha: </label>
			<div  class="col-sm-10">
			<input type="password" name="senha" class="form-control" placeholder="Digite o seu melhor senha" value="<?php echo $row_usuario['senha'];?>"><br>
			</div>
			</div>
			<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-danger" value="Editar">
			</div>
			</div>
		</form>
		</div>
	</body>
</html>