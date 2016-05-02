<?php
	$page_title="Login";
?>
<?php include("parts/header.php");?>
<?php include("admin/register.php");?>
	
	<main class="body">
		<div class="row form">
			<form method="post">

			<h3 class="col-md-12">Informações Pessoais</h3>
			<div class="col-md-8">
				<label for="nome">Nome Completo:</label>
				<input type="text" class="form-control" id="nome" name="nome" required>
			</div>
			<div class="col-md-4">
				<label for="sexo">Sexo:</label>
				<select class="form-control" id="sexo" name="sexo" required>
				  <option label=" "></option>
				  <option value="M">Masculino</option>
				  <option value="F">Feminino</option>
				</select>
			</div>

			<div class="col-md-6">
				<label for="cpf">CPF:</label>
				<input type="text" class="form-control" id="cpf" name="cpf" required>
			</div>

			<div class="col-md-6">
				<label for="telefone">Telefone:</label>
				<input type="text" class="form-control" id="telefone" name="telefone" required>
			</div>

			<div class="col-md-6">
				<label for="email">E-mail:</label>
				<input type="text" class="form-control" id="email" name="email" required>
			</div>

			<div class="col-md-6">
				<label for="senha">Senha:</label>
				<input type="Password" class="form-control" id="senha" name="senha" required>
			</div>

			<h3 class="col-md-12">Endereço</h3>
			<div class="col-md-10">
				<label for="rua">Rua:</label>
				<input type="text" class="form-control" id="rua" name="rua" required>
			</div>

			<div class="col-md-2">
				<label for="numero">Numero:</label>
				<input type="text" class="form-control" id="numero" name="numero" required>
			</div>

			<div class="col-md-12">
				<label for="complemento">Complemento:</label>
				<input type="text" class="form-control" id="complemento" name="complemento" required>
			</div>


			<div class="col-md-8">
				<label for="bairro">Bairro:</label>
				<input type="text" class="form-control" id="bairro" name="bairro" required>
			</div>

			<div class="col-md-4">
				<label for="cep">CEP:</label>
				<input type="text" class="form-control" id="cep" name="cep" required>
			</div>

			<div class="col-md-6">
				<label for="cidade">Cidade:</label>
				<input type="text" class="form-control" id="cidade" name="cidade" required>
			</div>

			<div class="col-md-6">
				<label for="estado">Estado:</label>
				<input type="text" class="form-control" id="estado" name="estado" required>
			</div>

			<div class="col-md-offset-3">
			<div class="col-md-4">
				<button type="submit" class="btn btn-primary btn-lg btn-block" name="btn-signup">Registrar</button>
			</div>
			<div class="col-md-4 form-inline">
				<button type="button" class="btn btn-default btn-lg btn-block">Cancelar</button>
			</div>
			</div>
		</form>
	</main>


<?php include("parts/footer.php");?>