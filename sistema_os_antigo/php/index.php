<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema ERP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>
<body>
	<?php 
		$cliente = isset($_POST['cliente'])?$_POST['cliente']:420;
		$pedido = isset($_POST['pedido'])?$_POST['pedido']:300;
		$lucro = isset($_POST['lucro'])?$_POST['lucro']:200;
		$compra = isset($_POST['compra'])?$_POST['compra']:400;
		$usuario = isset($_POST['usuario'])?$_POST['usuario']:"admin";
	?>
	<header class="cabecalho">
		<h1>Sistema ERP</h1>
		<nav>
			<ul class="menu-fechado">
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<ul class="admin">
				<li><i class="fa fa-file-text-o"></i> Documentação</li>
				<li><i class="fa fa-user-o"></i> Usuário:<?php echo " $usuario";?></li>
			</ul>
		</nav>
		<div class="clear">
		</div>
	</header> 

	<nav class="menu-navegacao">
		<h2 class="barra-menu">Menu</h2>
		<ul>
			<li class="ativo"><a href="http://localhost/sistema-php/index.php"><i class="fa fa-cog"></i> Painel de Controle </a></li>
			<li><a href="http://localhost/sistema-php/cliente.php"><i class="fa fa-group"></i> Clientes </a></li>
			<li><a href="http://localhost/sistema-php/fornecedores.php"><i class="fa fa-bus"></i> Fornecedores </a></li>
			<li class="mostrar-item"><a href="http://localhost/sistema-php/produtos.php"><i class="fa fa-folder-o"></i> Gerenciar Produtos </a>
				<ul class="esconder-item">
					<a href="">
						<li>Nota Fiscal de Entrada</li>
					</a>
					<a href="">
						<li>Cadastro de Produtos</li>
					</a>
					<a href="">
						<li>Lista de Produtos</li>
					</a>
					<a href="">
						<li>Lista de NF de Entrada</li>
					</a>
				</ul>
			</li>
			<li class="mostrar-item"><a href="http://localhost/sistema-php/pedidos.php"><i class="fa fa-copy"></i> Gerenciar Pedidos </a>
				<ul class="esconder-item">
					<a href="">
						<li>Ordem de Serviço</li>
					</a>
					<a href="">
						<li>Lista de Pedidos</li>
					</a>
				</ul>
			</li>
			<li class="mostrar-item"><a href="http://localhost/sistema-php/compras.php"><i class="fa fa-cart-arrow-down"></i> Gerenciar Compras </a>
				<ul class="esconder-item">
					<a href="">
						<li>Pedido de Compra</li>
					</a>
					<a href="">
						<li>Ordem de Compra</li>
					</a>
					<a href="">
						<li>Lista de Compras</li>
					</a>
				</ul>
			</li>
			<li class="mostrar-item"><a href="http://localhost/sistema-php/vendas.php"><i class="fa fa-check-square"></i> Gerenciar Vendas </a>
				<ul class="esconder-item">
					<a href="">
						<li>Nota Fiscal de Saída</li>
					</a>
					<a href="">
						<li>Lista de NF de Saída</li>
					</a>
				</ul>	
			</li>
			<li><a href="http://localhost/sistema-php/relatorios.php"><i class="fa fa-clone"></i> Relatórios </a></li>
			<li><a href="http://localhost/sistema-php/perfil.php"><i class="fa fa-user-o"></i> Perfil </a></li>
			<li><a href="http://localhost/sistema-php/configuracoes.php"><i class="fa fa-cogs"></i> Configurações </a></li>
			<li><a href="http://localhost/sistema-php/sair.php"><i class="fa fa-remove"></i> sair </a></li>
		</ul>
	</nav>

	<main class="tela-principal">
			<section class="blocos">
		<div class="bloco-cliente bloco">
			<p class="valor"><?php echo "$cliente"; ?></p>
			<p>Total de Clientes</p>
		</div>

		<div class="bloco-pedido bloco">
			<p class="valor"><?php echo"$pedido"; ?></p>
			<p>Pedidos Pendentes</p>
		</div>

		<div class="bloco-lucro bloco">
			<p class="valor"><?php echo"$lucro"; ?></p>
			<p>Total de Lucro (Mensal)</p>
		</div>

		<div class="bloco-compra bloco">
			<p class="valor"><?php echo"$compra"; ?></p>
			<p>Total de Compras (Mensal)</p>
		</div>
		</section>
	</main>

	<footer>
		
	</footer>

</body>
</html>