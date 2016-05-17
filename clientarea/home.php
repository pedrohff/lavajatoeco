<?php
	$page_title="Home - Area do Cliente - Lava Jato Eco";
?>
<?php include("admin/connection.php");?>
<?php include("admin/addservico.php");?>
<?php include("parts/header.php");?>
<?php include("parts/nav.php");?>
	<main class="body">
		<div class="row">
			<div class="col-md-12 user-area">
				<h2><i class="fa fa-user" aria-hidden="true"></i>   <?php echo $usuario['nome']  ?></h2>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-12">
		  	<h2>Selecione um serviço:</h2>


		  </div>
		  <form method="post">
			  <div class="col-xs-12 col-sm-5 col-lg-4 col-xs-offset-1 col-sm-offset-1 col-lg-offset-2">
			  	<div class="servico">
					<div class="sv-header">
						<img src="style/img/lavagemaseco.png">
					</div>
					<div class="sv-footer">
						<div class="sv-desc">
						Lavagem a Seco<br/><h4></h4>
						<a href="#" class="sv-button" name="serv1" data-toggle="modal" data-target="#servico" data-servico="1" id="sv1">R$ 40,00</a>
						</div>
					</div>
				</div>
			  </div>

			  <div class="col-xs-12 col-sm-5 col-lg-4 col-xs-offset-1">
			  	<div class="servico">
					<div class="sv-header">
						<img src="style/img/lavagemavapor.png">
					</div>
					<div class="sv-footer">
						<div class="sv-desc">
						Lavagem a Vapor<br/><h4></h4>
						<a href="#" class="sv-button" name="serv2" data-toggle="modal" data-target="#servico" data-servico="2" id="sv2">R$ 50,00</a>
						</div>
					</div>
				</div>
			  </div>

			  <div class="col-xs-12 col-sm-5 col-lg-4 col-xs-offset-1 col-sm-offset-1 col-lg-offset-2">
			  	<div class="servico">
					<div class="sv-header">
						<img src="style/img/lavagemaseco-completa.png">
					</div>
					<div class="sv-footer">
						<div class="sv-desc">
						Lavagem a Seco<br/><h4>(completa)</h4>
						<a href="#" class="sv-button" name="serv3" data-toggle="modal" data-target="#servico" data-servico="3" id="sv3">R$ 45,00</a>
						</div>
					</div>
				</div>
			  </div>

			  <div class="col-xs-12 col-sm-5 col-lg-4 col-xs-offset-1">
			  	<div class="servico">
					<div class="sv-header">
						<img src="style/img/lavagemavapor-completa.png">
					</div>
					<div class="sv-footer">
						<div class="sv-desc">
						Lavagem a Vapor<br/><h4>(completa)</h4>
						<a href="#" class="sv-button" name="serv4" data-toggle="modal" data-target="#servico" data-servico="4" id="sv4">R$ 55,00</a>
						</div>
					</div>
				</div>
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
<?php include("parts/navend.php");?>
<?php include("parts/footer.php");?>