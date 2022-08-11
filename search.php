<?php 
require_once "function.php";
$search=$_POST['customSearch'];
$lowSearch=strtolower($search);
$finalSearch=str_replace(' ','=',$lowSearch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Last News - <?php echo $finalSearch;?></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Crete+Round:ital@1&family=Roboto+Serif:opsz,wght@8..144,500&family=Roboto+Slab&family=Rokkitt&display=swap" rel="stylesheet">
</head>
<body class="bg-black">
	<div class="container">
		<div class="row">
			<div class="col header">
				<h1>Last News</h1>
				<div class="navbarBackground">
					<nav class="navbar navbar-expand">
						<div class="collapse navbar-collapse" id="navbarNav">
							<div class="navbar-nav">
								<a class="nav-link nav-item" href="index.php"><b>Inicio</b></a>
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
					</nav>
				</div>
			</div>
		</div>
		<?php
			if(empty($search)) {
				error_reporting(0);
				?>
				<div class="row bg-dark noContent">
					<h4>No se han encontrado resultados para su búsqueda</h4>
				</div>
				<?php 
			}
			else {
				$response = userSearch($finalSearch);
				$showNew =  showSearchNews($response);
			}
		?>
	</div>	
</body>
</html>