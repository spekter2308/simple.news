<?php
/**
*	inerface INewsDB
*		містить основні методи для роботи із стрічкою новин
*/
interface INewsDB{
	/**
	*	Додавання нового запису у стрічку новин
	*	
	*	@param string $title - зоголовок новини
	*	@param string $category - категорія новини
	*	@param string $description - текст новини
	*	@param string $source - джерело новини
	*	
	*	@return boolean - результат успіх/помилка
	*/
	function saveNews($title, $category, $description, $source);
	/**
	*	Вибірка всіх записів з бд новин
	*	
	*	@return array - результат вибірки у вигляді масиву
	*/
	function getNews();
	/**
	*	Видалення запису із стрічки новин
	*	
	*	@param integer $id - ідентифікатор запису для видалення
	*	
	*	@return boolean - результат успіх/помилка
	*/
	function deleteNews($id);
}
?>