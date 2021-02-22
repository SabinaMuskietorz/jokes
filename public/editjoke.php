<?php
require '../loadTemplate.php';
	require '../dbconfig.php';
	require '../functions.php';
	
	if (isset($_POST['submit'])) {
		$date = new DateTime();

		$joke = $_POST['joke'];
		$joke['jokedate'] = $date->format('Y-m-d H:i:s');

		save($pdo, 'joke', $joke, 'id');

		header('location: jokes.php');
		
	}
	else {
		if (isset($_GET['id'])) {
			$result = find($pdo, 'joke', 'id', $_GET['id']);
			$joke = $result[0];
		}
		else {
			$joke = false;
		}
		
		$output = loadTemplate('../templates/editjoke.html.php', ['joke' => $joke]);
		$title = 'Edit joke';
	}
	
        require '../templates/layout.html.php';
	?>