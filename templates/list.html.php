<?php 
echo '<ul>';
foreach($jokes as $joke) {
    ?>
    <blockquote>
    <p> <?=$joke->joketext?> <br>
    <em><?=$joke->getAuthor()->name;?></em>
    <a href=""/joke/edit?id=<?= $joke->id ?>">Edit</a>

    <form action="/joke/delete" method="POST">
    <input type="hidden" name="id" value="<?=$joke->id?>" />
    <input type="submit" name="submit" value="Delete" />
    </form>
    </p>
</blockquote>
<?php 
echo '</ul>';
}
 ?>