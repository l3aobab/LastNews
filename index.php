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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Crete+Round:ital@1&family=Roboto+Serif:opsz,wght@8..144,500&family=Roboto+Slab&family=Rokkitt&display=swap" rel="stylesheet">
<body class="bg-black">
	<div class="container">
		<div class="row">
			<div class="col header">
				<h1>Last News</h1>
				<div class="navbarBackground">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<div class="container-fluid">
							<a class="navbar-brand" href="#">Hidden brand</a>
							<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbar">
								<ul class="navbar-nav">
									<li class="nav-item"><a class="nav-link active" href="index.php"><b>Inicio</b></a></li>
									<li class="nav-item"><a class="nav-link" href="business.php"><b>Economía</b></a></li>
									<li class="nav-item"><a class="nav-link" href="sports.php"><b>Deportes</b></a></li>
									<li class="nav-item"><a class="nav-link" href="entertainment.php"><b>Cultura</b></a></li>
									<li class="nav-item"><a class="nav-link" href="science.php"><b>Ciencia</b></a></li>
									<li class="nav-item"><a class="nav-link" href="technology.php"><b>Tecnología</b></a></li>
									<li class="nav-item"><a class="nav-link" href="health.php"><b>Salud</b></a></li>
								</ul>
								<form name="form_search" method="post" action="search.php" class="d-flex">
									<input class="form-control me-2 search-bar" placeholder="Buscar una noticia" type="text" name="customSearch">
									<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
								</form>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<?php
			$response = topHeadlines();
			$showNew =  showNews($response);
		?>
	</div>	
</body>
</html>