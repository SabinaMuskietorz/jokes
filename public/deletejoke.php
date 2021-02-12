<?php
require '../dbconfig.php';
require '../functions.php';

deleteJoke($pdo, $_POST['id']);

header('location: jokes.php');