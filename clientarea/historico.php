<?php
	$page_title="Home - Area do Cliente";
?>
<?php include("admin/connection.php");?>
<?php include("parts/header.php");?>
<?php include("parts/nav.php");?>
<?php 
	$cpf=$usuario['cpf'];
	$option='';
	$solicitacoes = mysqli_query($connection,"SELECT Sv.descricao, S.estado, DATE_FORMAT(CONVERT_TZ(S.datapedido,'+00:00','-03:00'),'%d/%m/%Y às %H:%i') as datapedido, DATE_FORMAT(S.data_horario, '%d/%m/%Y às %H:%i') as data_horario FROM servico Sv INNER JOIN solicitacoes S ON (Sv.codigo=S.servico_codigo) WHERE S.Usuario_cpf=$cpf ORDER BY S.datapedido DESC");
 	while ($opt = mysqli_fetch_assoc($solicitacoes)) {
	 	$option .= '<tr><td>'.$opt['descricao'].'</td><td>'.$opt['estado'].'</td><td>'.$opt['datapedido'].'</td><td>'.$opt['data_horario'].'</td></tr>';
	}
?>
	<main class="body">
		<div class="row">
			<div class="col-md-12 user-area">
				<h2><i class="fa fa-user" aria-hidden="true"></i>   <?php echo $usuario['nome']  ?></h2>
			</div>
		</div>
		<hr></hr>
		<div class="row">
		  <div class="col-md-12">
		  <?php if(mysqli_num_rows($solicitacoes)==0){ ?>
		  	<h2 style="text-align: center">Nenhum pedido recente</h2>
		  <?php } else { ?>
		  	<h2>Historico</h2>
		  	<table class="table table-striped table-hover">
		  		<thead><tr><th>Serviço</th><th>Status</th><th>Data do Pedido</th><th>Data Programada</th></tr></thead>
		  		<tbody>
		  			<?php echo $option?>
		  		</tbody>
		  	</table>
		  <?php } ?>
		</div>
	</main>
<?php include("parts/navend.php");?>
<?php include("parts/footer.php");?>