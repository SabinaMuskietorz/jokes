<?php
require '../functions/loadTemplate.php';
require '../dbconfig.php';
require '../classes/DatabaseTable.php';

$title = 'Internet Joke Database';
$jokesTable = new DatabaseTable($pdo, 'joke', 'id');
$jokes = $jokesTable->find('id', 1);

require '../pages/' . $_GET['page'] . '.php';

require  '../templates/layout.html.php';