<?php
require 'dbconfig.php';

$stmt =$pdo->prepare ('SELECT * FROM joke');
$stmt ->execute();

require '../templates/loadTemplate.php';

$title = 'Joke list';

$templateVars = [ 'stmt' => $stmt ];

$output = loadTemplate('../templates/list.html.php', $templateVars);

require  '../templates/layout.html.php';