<?php foreach($stmt as $joke) { ?>
<blockquote>
<p> <?=$joke['joketext']?> <br>
    <a href="editjoke.php?id=<?= $joke['id'] ?>">Edit</a>
    <P>
</blockquote>
<?php } ?>