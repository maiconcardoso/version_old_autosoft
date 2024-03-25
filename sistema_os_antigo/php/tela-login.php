<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema ERP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<style type="text/css">
		main{
			text-align:center;
			padding-top:30px;
			margin:150px auto;
			width:400px;
			box-shadow:3px 2px 2px 2px rgba(0,0,0,0.3);
		}
		main h1{
			padding-bottom:10px;
			margin-bottom:30px;
			font-size:30px;
			font-family:Arial, Helvetica, sans-serif;
			font-weight:bold;
			border-bottom:1px solid rgba(0,0,0,0.1);

		}
		h1 span{
			color:#4876FF;
		}
		input{
			padding:10px;
			margin:10px;
			width:260px;
			border-radius:5px;
			border:1px solid rgba(0,0,0,0.3);
		}
		button{
			padding:10px;
			width:150px;
			margin:10px;
		}
	</style>
</head>
<body>
	
	<main>
		<h1><span>SISTEMA</span> ERP</h1>
		<form method="post" action="index.php">
			<input type="text" name="usuario" placeholder="Usuário">
			<input type="password" name="password" placeholder="Senha">
			<button>Entrar</button>
		</form>
	</main>
	<?php
		 #include "mysqlconecta.php";
		$usuario = isset($_POST['usuario'])?$_POST['usuario']:"Erro! Nome incorreto";
		$password = isset($_POST['password'])?$_POST['password']:"Erro! Senha Incorreta";
		if($usuario == "maiconcardoso" && $password == 123){
			
		}
	?>
</body>
</html>