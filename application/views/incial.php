<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Bem vindo ao TcheBooks</title>
	<!--Estilos-->
	<link href="/html/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link href="/html/css/bootstrap-theme.css" type="text/css" rel="stylesheet" />
	<link href="/html/css/default.css" type="text/css" rel="stylesheet" />
	<!-- Scripts -->
	<script type="text/javascript" src="/html/js/jquery.js"></script>
	<script type="text/javascript" src="/html/js/bootstrap.js"></script>

	<?php 
	if(isset($css)){
		Uteis::loadCss($css);
	}
	if(isset($js)) {
		Uteis::loadJs($js);	
	}
	?>
</head>
<body>
	<div class="container-fluid">

		<div class="row tituloPrincipal">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h1 class="text-center tituloLogo"><small class="bemVindo">Bem vindo ao</small> TCHEBooks.COM</h1>
			</div>
			<div class="col-md-4"></div>
		</div>

		<div class="row frmLogin">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form role="form">
					<div class="form-group">
						<label for="login">Login</label><a href="usuario/cadastrar" class="text-right"> Ainda não tenho uma conta</a>
						<input type="email" class="form-control" id="login" placeholder="Utilize o login ou seu email">
					</div>
					<div class="form-group">
						<label for="senha">Password</label>
						<input type="password" class="form-control" id="senha" placeholder="Senha">
					</div>
					<button type="submit" class="btn btn-primary">Logar-se</button>
					<a href="#" class="text-right esqSenha">esqueci minha senha</a>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>

	</div>
</body>
</html>