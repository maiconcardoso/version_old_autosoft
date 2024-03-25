<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema ERP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/cliente.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>
<body>
	<?php 
		$cliente = isset($_POST['cliente'])?$_POST['cliente']:420;
		$pedido = isset($_POST['pedido'])?$_POST['pedido']:300;
		$lucro = isset($_POST['lucro'])?$_POST['lucro']:200;
		$compra = isset($_POST['compra'])?$_POST['compra']:400;
	?>
	<header class="cabecalho">
		<h1>Clientes</h1>
		<nav>
			<ul class="menu-fechado">
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<ul class="admin">
				<li><i class="fa fa-file-text-o"></i> Documentação</li>
				<li><i class="fa fa-user-o"></i> Usuário:<?php echo "";?></li>
			</ul>
		</nav>
		<div class="clear">
			
		</div>
	</header> 

	<nav class="menu-navegacao">
		<h2 class="barra-menu">Menu</h2>
		<ul>
			<li><a href="http://localhost/sistema-php/index.php"><i class="fa fa-cog"></i> Painel de Controle </a></li>
			<li  class="ativo"><a href="http://localhost/sistema-php/cliente.php"><i class="fa fa-group"></i> Clientes </a></li>
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
			<section class="conteudo">

	<form action="cliente.php" method="post">
		<div class="pessoa-fisica">
			<h2 class="titulo-secundario">Pessoa Física</h2>

			<input type="text" name="nome" placeholder="Nome Completo*">
			<input type="text" name="cpf" placeholder="CPF*">
			<input type="text" name="endereco" placeholder="Endereço*">
			<input type="text" name="cep" placeholder="CEP">
			<input type="email" name="email" placeholder="E-Mail">
			<input type="call" name="telefone" placeholder="Telefone*">
			<textarea placeholder="Informações Adicionais"></textarea>

			<button type="submit">Cadastrar</button>
		</div>

		<div class="pessoa-juridica">
			<h2 class="titulo-secundario">Pessoa Juridica</h2>

			<input type="text" name="razao_social" placeholder="Razão Social*">
			<input type="text" name="cnpj" placeholder="CNPJ*">
			<input type="text" name="inscricao_estadual" placeholder="Inscrição Estatual*">
		</div>
	</form>
		</section>
	</main>

	<footer>
		
	</footer>

</body>
</html>