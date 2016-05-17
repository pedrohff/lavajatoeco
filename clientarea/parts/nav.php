<div class="container" id="containergeral">
<div class="row">
	<div class="col-sm-12 col-md-3" id="nav">
		<div class="nav-container">
			<div class="row">
				<div class="col-md-12"><h2><i class="fa fa-bars" aria-hidden="true"></i>   Menu</h2></div>
			</div>
			<hr>
			<ul>
				<li><a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
				<?php if($usuario['tipo']==01)
								echo "<li><a href='administracao.php'><i class='fa fa-tachometer' aria-hidden='true'></i>Administração</a></li>"; ?>
				<li><a href="historico.php"><i class="fa fa-history" aria-hidden="true"></i>Historico</a></li>
				<li><a href="admin/logout.php?logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Sair</a></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-12 col-md-9 col-md-offset-3" id="page-content">