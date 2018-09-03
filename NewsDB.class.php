<?php
header('Content-Type: text/html; charset=utf-8');
require 'INewsDB.class.php';

class NewsDB implements INewsDB {
	private $link;

	function deleteNews($id)
	{
		try {
			$sql = "DELETE FROM `msgs` WHERE id=$id";
			$res = $this->execute($sql);
			if(!$res)
				throw new Exception($this->link->mysqli_connect_error());
			return true;
		} catch (Exception $e){
			return false;
		}
	}
	function getNews()
	{
		$sql = "SELECT * FROM `category` c JOIN `msgs` m ON c.id = m.category ORDER BY m.id";
		return $this->query($sql);
	}

	function saveNews($title, $category, $description, $source)
	{
		try {
			$dt = time();
			$sql = "INSERT INTO `msgs` SET `title` = '$title', `category` = '$category', `description` = '$description', 
`source` = '$source', `datetime` = '$dt'";
			$result = $this->execute($sql);
			if(!$result)
				throw new Exception($this->link->mysqli_connect_error());
			return true;
		} catch (Exception $e) {
			return false;
		}
	}
	public function connect() {
		$config = require_once 'config.php';
		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
		$this->link = new PDO($dsn , $config['username'], $config['root']);
		return $this;
	}
	public function execute($sql) {
		$sth = $this->link->prepare($sql);
		return $sth->execute();
	}
	public function query($sql){
		$sth = $this->link->prepare($sql);
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		if($result === false){
			return [];
		}
		return $result;
	}

	function __construct()
	{
		$this->connect();
	}
	function __destruct()
	{
		unset($this);
	}
}
//$news = new NewsDB();


?>