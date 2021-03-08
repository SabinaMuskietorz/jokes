<?php
$title = 'Internet Joke Database';
$joke = $jokesTable->find('id', 1);

$output = loadTemplate('../templates/home.html.php', ['joke' => $joke]);