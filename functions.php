<?phpfunction findJoke($pdo, $id) {
    $stmt = $pdo->prepare('SELECT * FROM joke WHERE id = :id');
    $stmt->execute(['id' => $id]);

    return $stmt->fetch();
}