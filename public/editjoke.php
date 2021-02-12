<?php
require '../loadTemplate.php';
	require '../dbconfig.php';
	
	if (isset($_POST['submit'])) {
		$stmt = $pdo->prepare('UPDATE joke
                               SET joketext = :joketext , jokedate = :jokedate
                               WHERE id = :id');
		
		$values = [
			'joketext' => $_POST['joketext'],
			'jokedate' => $_POST['jokedate'],
			'id' => $_POST['id']
		];
	
		$stmt->execute($values);
		echo ' Joke <br> ' . $_POST['joketext'] . ' <br>has been edited';
		echo '<p><a href="jokes.php">back to jokes</a>';
		
	}
	//If the form has not been submitted, check that a news article has been selected to be edited e.g. editnews.php?id=3
	else if (isset($_GET['id'])) {
	
		$jokeStmt = $pdo->prepare('SELECT * FROM joke WHERE id = :id');
	
		$values = [
			'id' => $_GET['id']
		];
	
		$jokeStmt->execute($values);
	
		$joke = $jokeStmt->fetch();
?><?php
	        ob_start();
        require '../templates/editjoke.html.php';
        $output = ob_get_clean();
        require '../templates/layout.html.php';
        ?>
	<?php
	
	}
	?>