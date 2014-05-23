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
	?>
</head>
<body>