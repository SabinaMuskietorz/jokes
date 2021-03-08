<?php
require '../functions/loadTemplate.php';
require '../dbconfig.php';
require '../classes/DatabaseTable.php';
require '../controllers/JokeController.php';

$jokesTable = new DatabaseTable($pdo, 'joke', 'id');
$jokeController = new JokeController($jokesTable);

if ($_SERVER['REQUEST_URI'] !== '/') {
    $functionName = ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.php';
    $page = $jokeController->$functionName();
}
else {
    $page = $jokeController->home();
}

$output = loadTemplate('../templates/' . $page['template'], $page['variables']);
$title = $page['title'];

require  '../templates/layout.html.php';