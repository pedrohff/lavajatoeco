<?php
	$page_title="Login - Area do Cliente";
?>
<?php include("parts/header.php");?>
<?php include("admin/login.php");?>
	<div class="container">
	<main class="body col-md-8 col-md-offset-2">
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
				<button type="submit" class="btn btn-primary btn-lg btn-block" name="btn-login">Entrar</button>
				<a class="btn btn-default btn-lg btn-block" href="registro.php">Registrar</a>
			</div>
		</form>
	</main>


<?php include("parts/footer.php");?>