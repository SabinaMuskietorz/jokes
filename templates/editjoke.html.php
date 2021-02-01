

<form action="editjoke.php" method="POST">

	<input type="hidden" name="id" value="<?= $joke['id'] ?>"/>
	
	<label>Date</label>
	<input type="text" name="jokedate"  value="<?=  $joke['jokedate'] ?>" />
	<label>Joke</label>
	<textarea name="joketext" > <?= $joke['joketext'] ?> </textarea>
	<input type="submit" name="submit" value="edit joke" />
</form>