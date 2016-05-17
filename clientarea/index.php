<?php
	$page_title="Login - Area do Cliente - Lava Jato Eco";
?>
<?php include("parts/header.php");?>
<?php include("admin/login.php");?>
	<div class="container container-small">
	<main class="body">
		<div class="row">
			<form method="post">
			<div class="col-md-12">
				<label for="email">E-mail:</label>
				<input type="text" class="form-control" id="email" name="email">
			</div>

			<div class="col-md-12">
				<label for="pass">Senha:</label>
				<input type="password" class="form-control" id="pass" name="pass">
			</div>
			<div class="col-md-12">
				<button type="submit" class="botao botao-primary" name="btn-login">Entrar</button>
				<a class="botao" href="registro.php">Registrar</a>
			</div>
		</form>
	</main>


<?php include("parts/footer.php");?>