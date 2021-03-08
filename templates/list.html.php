<?php 
echo '<ul>';
foreach($jokes as $joke) { 
    ?>
<blockquote>
<p> <?=$joke['joketext']?> <br>
    <a href="/editjoke?id=<?= $joke['id'] ?>">Edit</a>

    <form action="/deletejoke" method="POST">
    <input type="hidden" name="id" value="<?=$joke['id']?>" />
    <input type="submit" name="submit" value="Delete" />
    </form>
    </p>
</blockquote>
<?php 
echo '</ul>';
}
 ?>