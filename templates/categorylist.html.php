<h2>Categories</h2>
<?php 
echo '<ul>';
foreach($categories as $category) { 
    ?>
<blockquote>
<p> <?=$category['name']?> <br>
    <a href="/category/edit?id=<?= $category->id?>">Edit</a>

    <form action="/category/delete" method="POST">
    <input type="hidden" name="id" value="<?=$category->id?>" />
    <input type="submit" name="submit" value="Delete" />
    </form>
    </p>
</blockquote>
<?php 
echo '</ul>';
}
 ?>