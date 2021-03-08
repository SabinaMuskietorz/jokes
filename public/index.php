<?php
require '../functions/loadTemplate.php';
require '../dbconfig.php';
require '../classes/DatabaseTable.php';

$jokesTable = new DatabaseTable($pdo, 'joke', 'id');

if (isset($_GET['page'])) {
require '../pages/' . $_GET['page'] . '.php';
}
else {
    require '../pages/home.php';
}

require  '../templates/layout.html.php';