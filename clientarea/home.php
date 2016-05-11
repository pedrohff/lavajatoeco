<?php
	$page_title="Home - Area do Cliente";
?>
<?php include("admin/connection.php");?>
<?php include("admin/addservico.php");?>
<?php include("parts/header.php");?>
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
							if($usuario['tipo']==01){
								echo "<li><a href='administracao.php'>Administração</a></li>";
							}
							if($usuario['tipo']==00){
								echo "<li><a href='historico.php'>Historico de Pedidos</a></li>";
							}
						?>
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
		  <form method="post">
			  <div class="col-xs-6 col-md-4 col-md-offset-2 servico">
			    <a href="#" class="thumbnail" name="serv1" data-toggle="modal" data-target="#servico" data-servico="1" id="sv1">
			      <h3>Lavagem a Seco</h3>
			      <h5> </h5>
			      <h1>R$ 40,00</h1>
			    </a>
			  </div>
			  <div class="col-xs-6 col-md-4 servico">
			    <a href="#" class="thumbnail" name="serv2" data-toggle="modal" data-target="#servico" data-servico="2" id="sv2">
			      <h3>Lavagem a Vapor</h3>
			      <h5> </h5>
			      <h1>R$ 50,00</h1>
			    </a>
			  </div>

			  <div class="col-xs-6 col-md-4 col-md-offset-2 servico">
			    <a href="#" class="thumbnail" name="serv3" data-toggle="modal" data-target="#servico" data-servico="3" id="sv3">
			      <h3>Lavagem a Seco</h3>
			      <h5>(completa)</h5>
			      <h1>R$ 45,00</h1>
			    </a>
			  </div>

			  <div class="col-xs-6 col-md-4 servico">
			    <a href="#" class="thumbnail" name="serv4" data-toggle="modal" data-target="#servico" data-servico="4" id="sv4">
			      <h3>Lavagem a Vapor</h3>
			      <h5>(completa)</h5>
			      <h1>R$ 55,00</h1>
			    </a>
			  </div>
		  </form>
<script type="text/javascript">
	$(function () {
        $('#datetimepicker1').datetimepicker();
        $('#datetimepicker1').data("DateTimePicker").locale('pt-br');

        $('#servico').on('show.bs.modal', function (e) {
	 		var servicoid = $(e.relatedTarget).data('servico');
    		$(e.currentTarget).find('input[name="servicoinput"]').val(servicoid);
		})

    });	 	
</script>



		</div>
	</main>

<div class="modal fade" tabindex="-1" role="dialog" id="servico">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Solicitar serviço</h4>
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
        	<input type="hidden" name="servicoinput" value="">
      </div>
      <div class="modal-footer">
      	<div class="col-md-3 col-md-offset-6">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
        <div class="col-md-3">
        	<button type="submit" class="btn btn-primary" name="btn-solicitar" id="concluir">Concluir</button>
        </div>

        
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php include("parts/footer.php");?>