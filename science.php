<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Last News</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="main.css">
</head>
<body class="bg-black">
	<?php 
		function science() {
			$ch = curl_init();
			$agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
			curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?category=science&language=es&sortBy=publishedAt&apiKey=5b4f8bdf68e64633a1a878e95615e0af");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_USERAGENT, $agent);

			$data = curl_exec($ch);
			$res = json_decode($data);

			return $res;
		}		
	?>
	<div class="container">
		<div class="row">
			<div class="col header">
				<h1><b>LAST NEWS</b></h1>
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse" id="navbarNav">
						<div class="navbar-nav">
							<a class="nav-link nav-item" href="index.php"><b>Inicio</b></a>
							<a class="nav-link nav-item" href="business.php"><b>Economía</b></a>
							<a class="nav-link nav-item" href="sports.php"><b>Deportes</b></a>
							<a class="nav-link nav-item" href="entertainment.php"><b>Cultura</b></a>
							<a class="nav-link nav-item active" href="science.php"><b>Ciencia</b></a>
							<a class="nav-link nav-item" href="technology.php"><b>Tecnologia</b></a>
							<a class="nav-link nav-item" href="health.php"><b>Salud</b></a>
						</div>
						<form id="form_search" name="form_search" method="post" action="search.php" class="form-inline">
							<div class="form-group">
								<div class="input-group">
								<input class="form-control" placeholder="Buscar una noticia" type="text" name="customSearch">
								<span class="input-group-btn">
									<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
								</span>
								</div>
							</div>
						</form>
					</div>
				</nav>
			</div>
		</div>
		
		<?php
			$response = science();
			foreach($response->articles as $news) {
		?>
		<div class="row new bg-dark">
			<div class="col image">
				<img src="<?php echo $news->urlToImage; ?>" alt="news-thumbnail">
			</div>
			<div class="col-8 content">
				<h7><b><?php echo str_replace('-','/',substr($news->publishedAt,0,10));?>&nbsp;-&nbsp;<a href="<?php echo $news->source->name;?>"><?php echo $news->source->name;?></a></b></h7>
				<h4><?php echo $news->title; ?></h3>
				<h6><?php echo $news->description; ?></h5>
				<a href="<?php echo $news->url; ?>">Seguir leyendo→</a>
			</div>
		</div>
		<?php 
			}
		?>
	</div>	
</body>
</html>