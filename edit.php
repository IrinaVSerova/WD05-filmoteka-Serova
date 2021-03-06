<?php 
	require('config.php');
	require('database.php');
	$link = db_connect();

	require('models/films.php');

	if (array_key_exists('update-film', $_POST)) {
		
		if ( $_POST['title'] == '') {
			$errors[] = "Название фильма не может быть пустым";
		}
		if ( $_POST['genre'] == '') {
			$errors[] = "Название жанра не должно быть пустым";
		}
		if ( $_POST['year'] == '') {
			$errors[] = "Заполните год выпуска, пожалуйста";
		}

		if ( empty($errors)) {

		$result = film_update($link, $_POST['title'], $_POST['genre'], $_POST['year'], $_GET['id'], $_POST['description']);

			if ($result) {
				$resultSuccess = "Фильм был успешно обновлен!";
			} else {
				$resultError = "Что-то пошло не так. Добавьте фильм еще раз!";
			}
		}
	}

	$film = get_film($link, $_GET['id']);

	include('views/head.tpl');
	include('views/notifications.tpl');
	include('views/edit-film.tpl');
	include('views/footer.tpl');

	
?>