<?php
session_start();
include_once("conexao.php");
include './inc/header.php';
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
		<br><br>
		<h2>Listar Clientes</h2>
		<br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		//receber o numero da paggina
		$pagina_atual=filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);
		$pagina=(!empty($pagina_atual))? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 2;
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

		$result_usuarios = "select * from clientes LIMIT $inicio,$qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn,$result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "ID :" . $row_usuario['id']."<br>";
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

		//paginação - somar a quantidde de usuarios

		$result_pg="select count(id) AS num_result FROM clientes";
		$resultado_pg=mysqli_query($conn,$result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//quantidade de pagina
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

		//limitar os links antes depois
		$max_links = 2;
		echo "<a href='index.php?pagina=1'>Primeira</a>";
		for($pag_ant = $pagina - $max_links;$pag_ant<=$pagina-1;$pag_ant++){
			if($pag_ant>=1){
			echo "<a href='index.php?pagina=$pag_ant'>$pag_ant</a>";
			}
		}
		echo "$pagina";

		for($pag_dep = $pagina + 1;$pag_dep<=$pagina+$max_links;$pag_dep++){
			if($pag_dep<=$quantidade_pg){
			echo "<a href='index.php?pagina=$pag_dep'>$pag_dep</a>";
			}
		}


		echo "<a href='index.php?pagina=$quantidade_pg'>Ultima</a>";
		?>
		
	</body>
	<?php

	include './inc/header.php';

	?>
</html>