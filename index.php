<?php 
require_once "function.php"		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Last News - Inicio</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-black">
	<div class="container">
		<div class="row">
			<div class="col header">
				<h1><b>LAST NEWS</b></h1>
				<nav class="navbar navbar-expand">
					<div class="container-fluid justify-content-start">
						<div class="collapse navbar-collapse">
							<div class="navbar-nav">
								<a class="nav-link nav-item active" href="index.php"><b>Inicio</b></a>
								<a class="nav-link nav-item" href="business.php"><b>Economía</b></a>
								<a class="nav-link nav-item" href="sports.php"><b>Deportes</b></a>
								<a class="nav-link nav-item" href="entertainment.php"><b>Cultura</b></a>
								<a class="nav-link nav-item" href="science.php"><b>Ciencia</b></a>
								<a class="nav-link nav-item" href="technology.php"><b>Tecnología</b></a>
								<a class="nav-link nav-item" href="health.php"><b>Salud</b></a>
							</div>
							<div class="container-fluid">
								<form name="form_search" method="post" action="search.php" class="d-flex">
									<input class="form-control mr-sm-2 search-bar" placeholder="Buscar una noticia" type="text" name="customSearch">
									<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
								</form>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<?php
			$response = topHeadlines();
			$showNew =  showNews($response);
		?>
	</div>	
</body>
</html>