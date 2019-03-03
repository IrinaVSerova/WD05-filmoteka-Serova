<?php 

	require('config.php');
	require('database.php');
	$link = db_connect();
	require('models/films.php');

	// $errors = array();

	if ( @$_GET['action'] == 'delete' ) {

		$result = film_delete($link, $_GET['id']);

		if ( $result) {
			$resultinfo = "Фильм был удален!";
		} 
	}

	$films = films_all($link);

	include('views/head.tpl');
	include('views/notifications.tpl');
	include('views/index.tpl');
	include('views/footer.tpl');
?>

<body class="index-page">	
	