<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>O parte</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
		$url = "https://newsapi.org/v2/everything?q=formula=1&language=es&apiKey=5b4f8bdf68e64633a1a878e95615e0af";
		$encodedUrl = urldecode($url);
		$response = file_get_contents($encodedUrl);
		$NewsData = json_decode($response);
	?>
	<div class="news-grid">
		<div class="news-header">
			<h1>Las noticias</h1>
		</div>
		
		<?php 
			foreach ($NewsData->articles as $News) {
		?>
		<div class="news-display">
			<div class="image">
				<img src="<?php echo $News->urlToImage; ?>" alt="news-thumbnail">
			</div>
			<div class="article">
				<h2><?php echo $News->title; ?></h2>
				<h4><?php echo $News->description; ?></h4>
				<p><?php echo $News->content; ?></p>
				<h5><?php echo $News->publishedAt; ?></h5>
				<a href="<?php echo $News->url; ?>">Seguir leyendo</a>
			</div>
		</div>
		<?php 
			}
		?>
		
		<div class="news-footer">
		</div>
	</div>

	
</body>
</html>