

<form action="editjoke.php" method="POST">

	<input type="hidden" name="id" value="<?= $joke['id'] ?>"/>
	<label>Joke</label>
	<textarea name="joketext" > <?= $joke['joketext'] ?> </textarea>
	<input type="submit" name="submit" value="edit joke" />
</form>