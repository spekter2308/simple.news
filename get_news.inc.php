<?php
echo '<p>All last news: '.count($news->getNews());
/*print_r($news->getNews());
die;*/
foreach ($news->getNews() as $item) {
	if ($item['id']) {
		$id = $item['id'];
		$title = $item['title'];
		$category = $item['category'];
		$description = $item['description'];
		$source = $item['source'];
		$dt = date('d-m-Y H:i:s', $item['datetime']);
		$name = $item['name'];
		echo <<<LABEL
	<hr>
	<h3>$title;	</h3>
<p>$id --- $description <br> [$category] @ $dt || $name</p>
<p align="right">
	<a href="news.php?del=$id">DELETE</a>
</p>
LABEL;

		LABEl;
	}
}
?>