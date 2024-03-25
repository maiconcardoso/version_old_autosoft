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
		 #   include "mysqlconecta.php";
		// Conecta ao banco de dados
		 #   include "mysqlexecuta.php";
		// Executa a cláusula SQL

		    //Executa a consulta
		 #   $sql = "SELECT * FROM cliente";
		 #   $res = mysqlexecuta($id,$sql);
	?>

	<?php
		#lista de cadastro clientes
		$nome = isset($_POST['nome'])?$_POST['nome']:'';
		$razao_social = isset($_POST['razao_social'])?$_POST['razao_social']:'';
		$inscricao_estadual = isset($_POST['inscricao_estadual'])?$_POST['inscricao_estadual']:'';
		$cpf = isset($_POST['cpf'])?$_POST['cpf']:'';
		$cnpj = isset($_POST['cnpj'])?$_POST['cnpj']:'';
		$endereco = isset($_POST['endereco'])?$_POST['endereco']:'';
		$cep = isset($_POST['cep'])?$_POST['cep']:'';
		$email = isset($_POST['email'])?$_POST['email']:'';
		$telefone = isset($_POST['telefone'])?$_POST['telefone']:'';
		$data = date('Y');
		$valor_registro = isset($_POST['valor_registro'])?$_POST['valor_registro']:1;

		#busca de cadastro clientes
		$busca_nome = isset($_POST['busca-nome'])?$_POST['busca-nome']:'';
		$busca_cpf_cnpj = isset($_POST['busca-cpf-cnpj'])?$_POST['busca-cpf-cnpj']:'';
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
		<h2 class="titulo-secundario"><a href="cadastro-cliente.php"><i class="fa fa-user-plus fa-lg"></i> Cadastrar Cliente</a></h2>

		<h2 class="titulo-secundario">Lista de Clientes</h2>
		<form method=post>
			<p class="registros">Mostrar 
				<select name="valor_registro">
					<option value="1">1</option>	
					<option value="2">2</option>	
					<option value="3">3</option>	
					<option value="4">4</option>	
					<option value="5">5</option>	
					<option value="6">6</option>	
					<option value="7">7</option>	
					<option value="8">8</option>
					<option value="9">9</option>	
					<option value="10">10</option>		
				</select>
			registros
			</p>
			<button>Mostrar</button>
		</form>

		<form method="post">
			<input class="busca" type="text" placeholder="Nome" name="busca-nome">
			<input class="busca" type="text" placeholder="CPF/CNPJ" name="busca-cpf-cnpj">
			<button class="btn-busca">Buscar</button>
		</form>

		<div class="tabela">
			<table>
				<tr>
					<th>Nome</th>
					<th>Razão Social</th>
					<th>Inscrição Estadual</th>
					<th>CPF</th>
					<th>CNPJ</th>
					<th>Endereço</th>
					<th>CEP</th>
					<th>Email</th>
					<th>Telefone</th>
					<th>Data de Cadastro</th>
					<th>Alterar Dados</th>
				</tr>

				<?php
					#Criar lógica para busca de cliente
					
					
					for($c=0; $c< $valor_registro; $c++){
						echo "
						<tr>
							<td>$nome</td>
							<td>$razao_social</td>
							<td>$inscricao_estadual</td>
							<td>$cpf</td>
							<td>$cnpj</td>
							<td>$endereco</td>
							<td>$cep</td>
							<td>$email</td>
							<td>$telefone</td>	
							<td>$data</td>
							<td class='icone'><a href='#'><i class='fa fa-address-card-o fa-lg'></i></a></td>
						</tr> ";
					}
				?>
			</table>	
		</div>
	</main>

	<footer>
		
	</footer>

</body>
</html>