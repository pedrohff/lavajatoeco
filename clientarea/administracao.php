<?php
	$page_title="Administração";
?>
<?php include("admin/connection.php");?>
<?php include("parts/header.php");?>
<?php include("parts/nav.php");?>
<?php 
	$cpf=$usuario['cpf'];
	$option='';
	$cor="";
	$solicitacoes = mysqli_query($connection,"SELECT codigo,nome, descricao, estado,CONVERT_TZ(datapedido,'+00:00','-03:00') AS datapedido, data_horario, endereco FROM viewadmin");
 	while ($opt = mysqli_fetch_assoc($solicitacoes)) {
 		switch($opt['estado']){
 			case 'aberto':
 				$cor="label-warning";
 				break;
 			case 'agendado':
 				$cor="label-primary";
 				break;
 			case 'concluido':
 				$cor="label-success";
 				break;
 			case 'cancelado':
 				$cor="label-danger";
 				break;
 			default:
 				$cor="label-default";
 		}
	 	$option .= '<tr><td>'.$opt['codigo'].'</td><td>'.$opt['nome'].'</td><td>'.$opt['descricao'].'</td>
	 	<td><a href="#" data-toggle="modal" data-target="#alterarestado" data-solicitacao="'.$opt['codigo'].'" class="label '.$cor.'">'.$opt['estado'].'</a></td>
	 	<td>'.$opt['datapedido'].'</td><td>'.$opt['data_horario'].'</td><td>'.$opt['endereco'].'</td></tr>';
	}
?>
<?php 
if(isset($_POST['btn-solicitar']))
{
	$status = mysqli_real_escape_string($connection,$_POST['status']);
	$sid =  mysqli_real_escape_string($connection,$_POST['solicitacaoinput']);
	$sqlstatus = mysqli_query($connection,"UPDATE solicitacoes SET estado='$status' WHERE codigo='$sid'");
	header("Refresh:0");
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
		  	<h2>Ultimas solicitações</h2>
		  	<form method="post">
		  	<table class="table table-striped table-hover">
		  		<thead><tr><th>ID</th><th>Cliente</th><th>Tipo de Limpeza</th><th>Estado</th><th>DataPedido</th><th>Agendamento</th><th>Local</th></tr></thead>
		  		<tbody>
		  			<?php echo $option?>
		  		</tbody>
		  	</table>
		  	</form>
		</div>
	</main>
<script type="text/javascript">
	$(function () {
		$('#alterarestado').on('show.bs.modal', function (e) {
	 		var idsolicitacao = $(e.relatedTarget).data('solicitacao');
    		$(e.currentTarget).find('input[name="solicitacaoinput"]').val(idsolicitacao);
		})
	});
</script>
<div class="modal fade" tabindex="-1" role="dialog" id="alterarestado">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Alterar estado</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="changestatus" name="changestatus">
        	<select name="status" class="form-control">
        		<option value="aberto">Em aberto</option>
        		<option value="agendado">Agendado</option>
        		<option value="cancelado">Cancelado</option>
        		<option value="concluido">Concluído</option>
        	</select>
        	<input type="hidden" name="solicitacaoinput" value="">
      </div>
      <div class="modal-footer">
      	<div class="col-md-6">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
        <div class="col-md-6">
        	<button type="submit" class="btn btn-primary" name="btn-solicitar" id="concluir">Concluir</button>
        </div>

        
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	<?php include("parts/navend.php");?>
<?php include("parts/footer.php");?>