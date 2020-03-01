<?php

// Beautiful var_dump;
function beautiful_var_dump($data) {
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

// Get all list products;
function select_all_products() {
	// по всей видимости не правильно будет в каждой функции делать подключение,
	// но пока так.
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB);
	// Именование переменных та ещё мука ;)
	$select_connect = mysqli_query($link, SELECT_ALL_PRODUCTS);
	
	while($fetch_arr = mysqli_fetch_array($select_connect, MYSQLI_ASSOC)) {
		$result_arr[] = $fetch_arr;
	}
	//mysql_close($link);
	return $result_arr;

}

?>