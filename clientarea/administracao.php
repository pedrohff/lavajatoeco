<?php
	$page_title="Administração";
?>
<?php include("admin/connection.php");?>
<?php include("parts/header.php");?>
<?php 
	$cpf=$usuario['cpf'];
	$option='';
	$solicitacoes = mysqli_query($connection,"SELECT codigo,nome, descricao, estado,CONVERT_TZ(datapedido,'+00:00','-03:00') AS datapedido, data_horario, endereco FROM viewadmin");
 	while ($opt = mysqli_fetch_assoc($solicitacoes)) {
	 	$option .= '<tr><td>'.$opt['codigo'].'</td><td>'.$opt['nome'].'</td><td>'.$opt['descricao'].'</td><td>'.$opt['estado'].'</td><td>'.$opt['datapedido'].'</td><td>'.$opt['data_horario'].'</td><td>'.$opt['endereco'].'</td></tr>';
	}
?>
	<style>
	.container{
		width:1170px;
		max-width:1170px;
	}
	</style>
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
		  	<h2>Ultimas solicitações</h2>
		  	<table class="table table-striped table-hover">
		  		<thead><tr><th>ID</th><th>Cliente</th><th>Tipo de Limpeza</th><th>Estado</th><th>DataPedido</th><th>Agendamento</th><th>Local</th></tr></thead>
		  		<tbody>
		  			<?php echo $option?>
		  		</tbody>
		  	</table>
		</div>
	</main>
<?php include("parts/footer.php");?>