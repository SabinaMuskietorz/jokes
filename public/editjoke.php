<?php
require '../loadTemplate.php';
	require '../dbconfig.php';
	require '../functions.php';
	
	if (isset($_POST['submit'])) {
		$joke = [
			'joketext' => $_POST['joketext']
		];

		updateJoke($pdo, $joke, 'id', $_POST['id']);
		
		echo ' Joke <br> ' . $_POST['joketext'] . ' <br>has been edited';
		echo '<p><a href="jokes.php">back to jokes</a>';
		header('location: jokes.php');
		
	}
	//If the form has not been submitted, check that a joke has been selected to be edited e.g. editjoke.php?id=3
	else {
	
		$joke = findJoke($pdo, $_GET['id']);
		$output = loadTemplate('../templates/editjoke.html.php', ['joke' =>$joke]);
		$title = 'Edit joke';
	}
	
        require '../templates/layout.html.php';
	?>