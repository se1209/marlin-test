<?php

	define('DB_HOST', 'localhost');
	define('DB', 'marlin_task');
	define('DB_USER', 'marlin_task');
	define('DB_PASS', 'marlin_task');

	// Буду использовать musqli в процедурном стиле;
	// Знаю что есть и ООП стиль или PDO,
	// но подзабыв нужно погуглить, чтобы освежить знания.

	//const connect_db = mysqli_connect('localhost', 'marlin_task', 'marlin_task', 'marlin_task');

	if (!mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB)) {
		echo 'Ошибка соеденения с сервером БД';
		exit();
	}

	

	// echo '<pre>';
	// var_dump($connect_db);
	// echo '</pre>';
?>