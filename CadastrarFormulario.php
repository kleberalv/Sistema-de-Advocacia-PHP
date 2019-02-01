<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		
		<!-- Bootstrap JavaScript -->
		<script src="node_modules/jquery/dist/jquery.js"></script>
		<script src="node_modules/popper.js/dist/popper.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<link rel="shortcut icon" href="Imagens/icone.png" width="100%" type="image/x-png"/>
		<title>Advocacia</title>
		
	</head>


  
  <body background="Imagens/Back.jpg">
  
	<!-- Parte de cima do site. -->
		<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="Index.html"><i class="fas fa-balance-scale"></i></a>		
				<a class="navbar-brand h1 mb-0"  href="Index.html">Sistema de advocacia</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
						<span class="navbar-toggler-icon"></span>
					</button>
				
				<div class="collapse navbar-collapse" id="navbarNav">
			
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
						<a class="nav-link" href="Index.html" ><i class="fas fa-home"></i> Início </a>
						</li>					
					
					</ul>
			
					<ul class="navbar-nav ml-auto mr-4">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop"><i class="fas fa-bars"></i> Opções	</a>
								
								<div class="dropdown-menu">							
									<a class="dropdown-item" href="Entrar.html"><i class="far fa-user-circle"></i> Entrar </a>
							
									<a class="dropdown-item" href="https://www.facebook.com/kleberalves.bezerra"><i class="fab fa-facebook"></i> Facebook</a>
									
									<a class="dropdown-item" href="https://twitter.com/Krebinn"><i class="fab fa-twitter-square"></i> Twitter</a>
									
									<a class="dropdown-item" href="https://www.instagram.com/advkleberalves/"><i class="fab fa-instagram"></i> Instagram</a>
								</div>
						</li>	
					</ul>
				
					<form class="form-inline">
						<input class="form-control  mr-1" type="search" placeholder="Buscar...">
						<button class="btn btn-light" type="submite"> OK </button>
					</form>
				
				</div>
			
		</nav>		
		
<br>


<?php

$nome= $_POST['nome'];
$sexo=$_POST['sexo'];
$tel=$_POST['tel'];
$email= $_POST['email'];
$motivoa= $_POST['motivoa'];
$da= $_POST['da'];
$mensagem= $_POST['mensagem'];
$sql = "insert into reuniao(nome,sexo,tel,email,motivoa,da,mensagem)

values('$nome','$sexo','$tel','$email','$motivoa','$da','$mensagem')";
$con=mysqli_connect("127.0.0.1","root","","projetoadvocacia");

if (mysqli_connect_errno()){ 
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	mysqli_query($con,$sql);
	echo "<br> <center><h2> Agendamento efetuado com
	sucesso!</center></h2><p><br>";
	mysqli_close($con);
?>

<center> <a href="Index.html" class="btn btn-outline-dark" >Voltar</a> </center>