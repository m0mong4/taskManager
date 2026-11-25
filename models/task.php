<?php

class task {
    public function getAll(): array {
        $pdo = database::getConnection();
        $stmt = $pdo->query('SELECT id, title, status FROM tasks');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id): ?array {
        $pdo = database::getConnection();
        $stmt = $pdo->prepare('SELECT id, title, status FROM tasks WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }
}