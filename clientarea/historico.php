<?php
	$page_title="Home - Area do Cliente";
?>
<?php include("admin/connection.php");?>
<?php include("parts/header.php");?>
<?php 
	$cpf=$usuario['cpf'];
	$option='';
	$solicitacoes = mysqli_query($connection,"SELECT Sv.descricao, S.estado, S.datapedido FROM servico Sv INNER JOIN solicitacoes S ON (Sv.codigo=S.servico_codigo) WHERE S.Usuario_cpf=$cpf");
 	while ($opt = mysqli_fetch_assoc($solicitacoes)) {
	 	$option .= '<tr><td>'.$opt['descricao'].'</td><td>'.$opt['estado'].'</td><td>'.$opt['datapedido'].'</td></tr>';
	}
?>
	<div class="container">
	<main class="body">
		<div class="row">
			<div class="col-md-6">
				<h3><?php echo $usuario['nome']  ?></h3>
			</div>
			<div class="col-md-6 pull-right">
				<nav class="nav navbar-default">
					<ul class="nav navbar-nav navbar-right">
						<?php 
							if($usuario['tipo']==01)
								echo "<li><a href='admin/logout.php?logout'>Administração</a></li>";
							if($usuario['tipo']==00)
								echo "<li><a href='historico.php'>Historico de Pedidos</a></li>";
						?>
						<li><a href="admin/logout.php?logout">Sair</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<hr></hr>
		<div class="row">
		  <div class="col-md-12">
		  	<h2>Historico</h2>
		  	<table class="table table-striped table-hover">
		  		<thead><tr><th>Serviço</th><th>Status</th><th>Data do Pedido</th></tr></thead>
		  		<tbody>
		  			<?php echo $option?>
		  		</tbody>
		  	</table>
		</div>
	</main>
<?php include("parts/footer.php");?>