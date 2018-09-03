<?php

$title = trim(strip_tags($_POST['title']));
$category = abs((int)$_POST['category']);
$description = trim(strip_tags($_POST['description']));
$source = trim(strip_tags($_POST['source']));
$errMsg = '';
if(empty($title) or empty($description)){
	$errMsg = 'Fill all fields';
} else {
	if($news->saveNews($title, $category, $description, $source)) {
		$errMsg = "error in writing";
	} else {
		header('Location: news.php');
		exit;
	}
}
