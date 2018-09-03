<?php
require 'NewsDB.class.php';
$news = new NewsDB();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	require 'save_news.inc.php';
}
if (isset($_GET['del'])){
	require 'delete_news.inc.php';
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>News</title>
</head>
<body>

<h1>Останні новини</h1>
<?php
	echo $errMsg;
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Заголовок новини:<br />
<input type="text" name="title" /><br />
Виберіть категорію:<br />
<select name="category">
<option value="1">ІТ</option>
<option value="2">Навчання</option>
<option value="3">Розвиток</option>
</select>
<br />
Текст новини:<br />
<textarea name="description" cols="50" rows="5"></textarea><br />
Джерело:<br />
<input type="text" name="source" /><br />
<br />
<input type="submit" value="Добавить!" />

</form>
<pre>
<?php
include 'get_news.inc.php';
?>

</body>
</html>