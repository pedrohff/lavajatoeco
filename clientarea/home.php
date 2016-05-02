<?php
	$page_title="Home - Area do Cliente";
?>
<?php include("admin/connection.php");?>
<?php include("admin/addservico.php");?>

<?php include("parts/header.php");?>
	
	<main class="body">
		<div class="row">
			<div class="col-md-6">
				<h3><?php echo $usuario['nome']  ?></h3>
			</div>
			<div class="col-md-6 pull-right">
				<nav class="nav navbar-default">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="admin/logout.php?logout">Sair</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<hr></hr>
		<div class="row">
		  <div class="col-md-12">
		  	<h2>Selecione um serviço:</h2>


		  </div>
		  <div class="col-xs-6 col-md-4 servico">
		    <a href="#" class="thumbnail" name="serv1" data-toggle="modal" data-target="#servico" id="sv1">
		      <h3>Serviço #1</h3>
		      <h5>Descrição #1</h5>
		      <h2>Preço #1</h2>
		    </a>
		  </div>

		  <div class="col-xs-6 col-md-4 servico">
		    <a href="#" class="thumbnail" name="serv2" data-toggle="modal" data-target="#servico" id="sv2">
		      <h3>Serviço #2</h3>
		      <h5>Descrição #2</h5>
		      <h2>Preço #2</h2>
		    </a>
		  </div>

		  <div class="col-xs-6 col-md-4 servico">
		    <a href="#" class="thumbnail" name="serv3" data-toggle="modal" data-target="#servico" id="sv3">
		      <h3>Serviço #3</h3>
		      <h5>Descrição #3</h5>
		      <h2>Preço #3</h2>
		    </a>
		  </div>
<script type="text/javascript">
	$('#sv1').click(function (e) {
		$servico='1';
	});
	$('#sv2').click(function (e) {
		$servico='2';
	});
	$('#sv3').click(function (e) {
		$servico='3';
	});
	$(function () {
        $('#datetimepicker1').datetimepicker();
        $('#datetimepicker1').data("DateTimePicker").locale('pt-br');
    });


</script>



		</div>
	</main>

<div class="modal fade" tabindex="-1" role="dialog" id="servico">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <form method="post">
        	<label for="local">Local:</label>
        	<select name="local" class="form-control">
        		<option value="0">Meu Endereço</option>
        		<?php echo $option; ?>
        	</select>
        	<label for="horario">Horario:</label>

        	<div class="form-group">
        		<div class='input-group date' id='datetimepicker1'>
        			<input type="text" name="horario" class="form-control" id="horario">
        			<span class="input-group-addon">
        				<span class="glyphicon glyphicon-calendar"></span>
        			</span>
        		</div>
        	</div>


        	<label for="comentario">Comentário:</label>
        	<textarea name="comentario" class="form-control"></textarea>

        
      </div>
      <div class="modal-footer">
      	<div class="col-md-3 col-md-offset-6">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
        <div class="col-md-3">
        	<button type="button" class="btn btn-primary">Concluir</button>
        </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php include("parts/footer.php");?>