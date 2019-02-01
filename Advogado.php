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


  
  <body background="Imagens/Back.jpg"">
  
	<!-- Parte de cima do site. -->
		<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="Administrador.html"><i class="fas fa-balance-scale"></i></a>		
				<a class="navbar-brand h1 mb-0"  href="Advogado.php">Sistema de advocacia</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
						<span class="navbar-toggler-icon"></span>
					</button>
				
				<div class="collapse navbar-collapse" id="navbarNav">
			
					<ul class="navbar-nav mr-auto">							

						<li class="nav-item">
						<a class="nav-link" href="Index.html" > <i class="fas fa-sign-out-alt"></i> Sair </a>
						</li>
					
					</ul>
			
					<ul class="navbar-nav ml-auto mr-4">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop"><i class="fas fa-bars"></i> Opções	</a>
								
								<div class="dropdown-menu">							
							
									<a class="dropdown-item" href="https://pt-br.facebook.com/"><i class="fab fa-facebook"></i> Facebook</a>
									
									<a class="dropdown-item" href="https://twitter.com/?lang=pt-br"><i class="fab fa-twitter-square"></i> Twitter</a>
									
									<a class="dropdown-item" href="https://www.instagram.com/"><i class="fab fa-instagram"></i> Instagram</a>
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
		
<div class="container-fluid">	

						
	<div class="col-12 text-center">				
		<h1 class="display-4"> Bem-vindo, advogado! </h1>

	</div>
	
		<div class="row container-fluid"> 
	
		<div class="col-12 mb-3"> <hr> </div>
		
		</div>

	<div class="container-fluid">	
			<div class="row" style="margin-top: 00px;">
				<div class="col-8">	
					<h1> Lista de Agendamentos </h1>
				</div>
					<div class="col-4"> 
						<a href="NovoAgendamentoAdv.html" class="btn btn-success float-right" >Novo agendamento</a>
					</div>
			</div>	
	<?php
		$con=mysqli_connect("localhost","root","","projetoadvocacia");
			if(mysqli_connect_errno()){
			echo "Failed to connect to MySQL:".mysqli_connect_error();
					}
		
		$result=mysqli_query($con,"SELECT*FROM reuniao");?> <p> <center>
		
		<table class="table table-sm table-hover">	
			  <thead class="thead-dark">
		
		<tr> 
			<th scope="col"> |Id| </th>
			<th scope="col"> |Nome| </th>
			<th scope="col"> |Sexo| </th>
			<th scope="col"> |Telefone| </th>
			<th scope="col"> |E-mail| </th>
			<th scope="col"> |Motivo do agendamento| </th>
			<th scope="col"> |Data do agendamento| </th>
			<th scope="col"> |Mensagem para os advogados| </th>
		</tr>

		<?php while($row=mysqli_fetch_array($result)){?>
		
	  <tr> 
		<tbody>
		<td> <?php echo $row['id'];?> </td>
		<td> <?php echo $row['nome'];?> </td>
		<td> <?php echo $row['sexo'];?> </td>
		<td> <?php echo $row['tel'];?> </td>
		<td> <?php echo $row['email'];?> </td>
		<td> <?php echo $row['motivoa'];?> </td>
		<td> <?php echo $row['da'];?> </td>
		<td> <?php echo $row['mensagem'];?> </td>
			<td>
	  </tr>
			</tbody>
				
		<?php } 	
		mysqli_close($con);
	?>	</table>
<br>							
						</div>
			
				</div>
		
			</div>
		
		</div>	


<br> <br>			
		<div class="row container-fluid"> 
	
		<div class="col-12 mb-3"> <hr> </div>
		
		</div>
	</div>	

<h6> <center> © Copyright 2001-2017 Advocacia.com.br - All Rights Reserved - Legal </center> </h6>			
</body>
</html>