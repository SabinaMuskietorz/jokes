<?php
function findJoke($pdo, $id) {
    $stmt = $pdo->prepare('SELECT * FROM joke WHERE id = :id');
    $stmt->execute(['id' => $id]);

    return $stmt->fetch();
}

function insertJoke($pdo, $joke) {
    $sql = 'INSERT INTO joke (joketext, jokedate) VALUES (:joketext, :jokedate)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute($joke);
}

function deleteJoke($pdo, $id) {
    $stmt = $pdo->prepare('DELETE FROM joke WHERE id = :id');
    $stmt->execute(['id' => $id]);
}

function updateJoke($pdo, $joke, $field, $value) {
    $stmt = $pdo->prepare('UPDATE joke
                        SET joketext = :joketext
                        WHERE ' . $field . ' = :value');

    $joke['value'] = $value;
    $stmt->execute($joke);
}
?>