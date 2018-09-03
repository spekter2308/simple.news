<?php
	$id = (int)$_GET['del'];
	if($id){
		if(!$news->deleteNews($id)){
			$errMsg = 'error of deleting';
		} else {
			header('Location: news.php');
			exit;
		}
	}
?>