<?php
function showNews($response) {
    foreach($response->articles as $news) {
        ?>
		<div class="row new bg-dark">
			<div class="col image">
				<img src="<?php echo $news->urlToImage; ?>" alt="news-thumbnail">
			</div>
			<div class="col-8 content">
				<h7><b><?php echo $news->source->name;?></b>&nbsp;- <?php echo str_replace('-','/',substr($news->publishedAt,0,10));?></h7>
				<h4><?php echo substr($news->title,0,strpos($news->title,"-")); ?></h4>
				<h6>&nbsp;&nbsp;<?php echo $news->description; ?></h6>
				<a href="<?php echo $news->url; ?>">Seguir leyendo→</a>
			</div>
		</div>
		<?php 
    }
}

function topHeadlines() {
    $ch = curl_init();
    $agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
    curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?language=es&apiKey=5b4f8bdf68e64633a1a878e95615e0af");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);

    $data = curl_exec($ch);
    $res = json_decode($data);

    return $res;
}

function business() {
    $ch = curl_init();
    $agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
    curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?category=business&language=es&sortBy=publishedAt&apiKey=5b4f8bdf68e64633a1a878e95615e0af");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);

    $data = curl_exec($ch);
    $res = json_decode($data);

    return $res;
}

function entertainment() {
    $ch = curl_init();
    $agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
    curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?category=entertainment&language=es&sortBy=publishedAt&apiKey=5b4f8bdf68e64633a1a878e95615e0af");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);

    $data = curl_exec($ch);
    $res = json_decode($data);

    return $res;
}

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

function sports() {
    $ch = curl_init();
    $agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
    curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?category=sports&language=es&sortBy=publishedAt&apiKey=5b4f8bdf68e64633a1a878e95615e0af");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);

    $data = curl_exec($ch);
    $res = json_decode($data);

    return $res;
}

function technology() {
    $ch = curl_init();
    $agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
    curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?category=technology&language=es&sortBy=publishedAt&apiKey=5b4f8bdf68e64633a1a878e95615e0af");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);

    $data = curl_exec($ch);
    $res = json_decode($data);

    return $res;
}

function userSearch($finalSearch) {
    $ch = curl_init();
    $agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
    curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/everything?q=".$finalSearch."&language=es&apiKey=5b4f8bdf68e64633a1a878e95615e0af");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);

    $data = curl_exec($ch);
    $res = json_decode($data);

    return $res;
}
?>