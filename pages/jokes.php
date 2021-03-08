<?php
require '../loadTemplate.php';
require '../dbconfig.php';
require '../DatabaseTable.php';

$jokesTable = new DatabaseTable($pdo, 'joke', 'id');
$jokes = $jokesTable->findAll();

$title = 'Joke list';

$templateVars = [ 'jokes' => $jokes];

$output = loadTemplate('../templates/list.html.php', $templateVars);

require  '../templates/layout.html.php';