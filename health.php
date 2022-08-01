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
		function health() {
			$ch = curl_init();
			$agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
			curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?category=health&language=es&sortBy=publishedAt&apiKey=5b4f8bdf68e64633a1a878e95615e0af");
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
							<a class="nav-link nav-item" href="science.php"><b>Ciencia</b></a>
							<a class="nav-link nav-item" href="technology.php"><b>Tecnologia</b></a>
							<a class="nav-link nav-item active" href="health.php"><b>Salud</b></a>
						</div>
					</div>
				</nav>
			</div>
		</div>
		
		<?php
			$response = health();
			foreach($response->articles as $news) {
		?>
		<div class="row new bg-dark">
			<div class="col content">
				<img src="<?php echo $news->urlToImage; ?>" alt="news-thumbnail">
			</div>
			<div class="col-8 content">
				<h3><?php echo $news->title; ?></h3>
				<h5><?php echo $news->description; ?></h5>
				<h7><?php echo $news->publishedAt; ?>&nbsp;<a href="<?php echo $news->url; ?>">Seguir leyendo→</a></h7>
				
			</div>
		</div>
		<?php 
			}
		?>
	</div>	
</body>
</html>