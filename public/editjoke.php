<?php
require '../loadTemplate.php';
	require '../dbconfig.php';
	require '../functions.php';
	
	if (isset($_POST['submit'])) {
		$joke = [
			'joketext' => $_POST['joketext'],
			'id' => $_POST['id']
		];

		save($pdo, 'joke', $joke, 'id');
		
		echo ' Joke <br> ' . $_POST['joketext'] . ' <br>has been edited';
		echo '<p><a href="jokes.php">back to jokes</a>';
		header('location: jokes.php');
		
	}
	//If the form has not been submitted, check that a joke has been selected to be edited e.g. editjoke.php?id=3
	else {
	
		$jokes = find($pdo, 'joke', 'id', $_GET['id']);
		$templateVars = [
			'joke' => $jokes[0]
		];

		$output = loadTemplate('../templates/editjoke.html.php', $templateVars);
		$title = 'Edit joke';
	}
	
        require '../templates/layout.html.php';
	?>