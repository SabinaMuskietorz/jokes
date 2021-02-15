<?php
require '../loadTemplate.php';
require '../dbconfig.php';
require '../functions.php';


$jokes = findAll($pdo, 'joke');

$title = 'Joke list';

$templateVars = [ 'jokes' => $jokes];

$output = loadTemplate('../templates/list.html.php', $templateVars);

require  '../templates/layout.html.php';