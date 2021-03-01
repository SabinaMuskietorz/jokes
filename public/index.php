<?php
require '../loadTemplate.php';
require '../dbconfig.php';
require '../DatabaseTable.php';

$title = 'Internet Joke Database';
$jokesTable = new DatabaseTable($pdo, 'joke', 'id');
$jokes = $jokesTable->find('id', 1);

$output = loadTemplate('../templates/home.html.php', ['joke' => $joke[0]]);

require  '../templates/layout.html.php';