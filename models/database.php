<?php

class database {
    public static function getConnection(): PDO {
        return new PDO(
            'mysql:host=localhost;dbname=gestionnaire_tache;charset=utf8mb4',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }
}