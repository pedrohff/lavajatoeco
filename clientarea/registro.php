<?php
	$page_title="Login";
?>
<?php include("parts/header.php");?>
<?php include("admin/register.php");?>
	<div class="container">
	<main class="body">
	<script>
		$(document).ready(function(){
			$('#cpf').mask('000.000.000-00');
			$('#telefone').mask('(00)00000-0000',{
				placeholder:'(00)00000-0000'
			});
			$('#cep').mask('00000-000');
			$('#cadastro').validator({
				delay: '3000'
			});
		})


	</script>
		<div class="row form">
			<form method="post" id="cadastro">

			<h3 class="col-md-12">Informações Pessoais</h3>
			<div class="form-group col-md-8">
				<label for="nome">Nome Completo:</label>
				<input placeholder="Nome Completo" type="text" class="form-control" id="nome" name="nome" data-minlength="10" data-error="Nome curto(minimo de 10 caracteres)" required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="col-md-4">
				<label for="sexo">Sexo:</label>
				<select class="form-control" id="sexo" name="sexo" required>
				  <option label=" "></option>
				  <option value="M">Masculino</option>
				  <option value="F">Feminino</option>
				</select>
			</div>

			<div class="form-group col-md-6">
				<label for="cpf">CPF:</label>
				<input placeholder="CPF" type="text" class="form-control" id="cpf" name="cpf" data-minlength="14" data-error="CPF Inválido" required>
				<div class="help-block with-errors"></div>
			</div>

			<div class="form-group col-md-6">
				<label for="telefone">Telefone:</label>
				<input type="text" class="form-control" id="telefone" name="telefone" data-minlength="14" data-error="Telefone Inválido" required>
				<div class="help-block with-errors"></div>
			</div>

			<div class="form-group col-md-6">
				<label for="email">E-mail:</label>
				<input placeholder="seu@email.com" type="email" class="form-control" id="email" name="email" data-error="E-mail Inválido" required>
				<div class="help-block with-errors"></div>
			</div>

			<div class="form-group col-md-6">
				<label for="senha">Senha:</label>
				<input placeholder="Senha" type="Password" class="form-control" id="senha" name="senha" data-minlength="8" data-error="Senha Inválida(minimo de 8 caracteres)" required>
				<div class="help-block with-errors"></div>
			</div>

			<h3 class="col-md-12">Endereço</h3>
			<div class="form-group col-md-10">
				<label for="rua">Rua:</label>
				<input placeholder="Rua" type="text" class="form-control" id="rua" name="rua" data-minlength="10" data-error="Rua Inválida(minimo de 10 caracteres)" required>
				<div class="help-block with-errors"></div>
			</div>

			<div class="form-group col-md-2">
				<label for="numero">Numero:</label>
				<input placeholder="N°" type="text" class="form-control" id="numero" name="numero" data-error="Numero Inválido"  required>
				<div class="help-block with-errors"></div>
			</div>

			<div class="col-md-12">
				<label for="complemento">Complemento:</label>
				<input placeholder="Complemento" type="text" class="form-control" id="complemento" name="complemento">
				<div class="help-block with-errors"></div>
			</div>


			<div class="form-group col-md-8">
				<label for="bairro">Bairro:</label>
				<input placeholder="Bairro" type="text" class="form-control" id="bairro" name="bairro" data-minlength="5" data-error="Bairro Inválido(minimo de 5 caracteres)" required>
				<div class="help-block with-errors"></div>
			</div>

			<div class="form-group col-md-4">
				<label for="cep">CEP:</label>
				<input placeholder="CEP" type="text" class="form-control" id="cep" name="cep" data-minlength="9" data-error="CEP Inválido" required>
				<div class="help-block with-errors"></div>
			</div>

			<div class="form-group col-md-6">
				<label for="cidade">Cidade:</label>
				<input placeholder="Cidade" type="text" class="form-control" id="cidade" name="cidade" data-minlength="4" data-error="Cidade Inválida(minimo de 4 caracteres)" required>
				<div class="help-block with-errors"></div>
			</div>

			<div class="form-group col-md-6">
				<label for="estado">Estado:</label>
				<input placeholder="Estado" type="text" class="form-control" id="estado" name="estado" data-minlength="5" data-error="Estado Inválido(Minimo de 5 caracteres)" required>
				<div class="help-block with-errors"></div>
			</div>

			<div class="col-md-offset-3">
			<div class="col-md-4">
				<button type="submit" class="btn btn-primary btn-lg btn-block" name="btn-signup">Registrar</button>
			</div>
			<div class="col-md-4 form-inline">
				<a href="/home.php" class="btn btn-default btn-lg btn-block">Cancelar</a>
			</div>
			</div>
		</form>
	</main>


<?php include("parts/footer.php");?>