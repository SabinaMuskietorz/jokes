<?php

$jokesTable->delete($_POST['id']);

header('location: /jokes');
?>