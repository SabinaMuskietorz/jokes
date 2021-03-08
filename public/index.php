<?php
require '../functions/loadTemplate.php';
require '../dbconfig.php';
require '../classes/DatabaseTable.php';

$jokesTable = new DatabaseTable($pdo, 'joke', 'id');

if ($_SERVER['REQUEST_URI'] !== '/') {
require '../pages/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.php';
}
else {
    require '../pages/home.php';
}

require  '../templates/layout.html.php';