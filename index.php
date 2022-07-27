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
		//$url = 'https://newsapi.org/v2/everything?q=formula=1&apiKey=5b4f8bdf68e64633a1a878e95615e0af';
		//$response = file_get_contents('https://newsapi.org/v2/everything?q=formula=1&apiKey=5b4f8bdf68e64633a1a878e95615e0af');
		//$NewsData = json_decode($response,true);

		$ch = curl_init();
		$agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
		curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/everything?q=formula=1&apiKey=5b4f8bdf68e64633a1a878e95615e0af");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);

		$data = curl_exec($ch);
		$response = json_decode($data)
		
	?>
	<div class="news-grid">
		<div class="news-header">
			<h1>Las noticias</h1>
		</div>
		
		<?php 
			foreach($response->articles as $news) {
		?>
		<div class="news-display">
			<div class="image">
				<img src="<?php echo $news->urlToImage; ?>" alt="news-thumbnail">
			</div>
			<div class="article">
				<h2><?php echo $news->title; ?></h2>
				<h4><?php echo $news->description; ?></h4>
				<p><?php echo $news->content; ?></p>
				<h5><?php echo $news->publishedAt; ?></h5>
				<a href="<?php echo $news->url; ?>">Seguir leyendo</a>
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