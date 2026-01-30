<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

try {
    $pdo = new PDO(
        "mysql:host=mysql; dbname=kurs_php;charset=utf8mb4",
        "kursant",
        "tajnehaslo",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
    echo "Połączono z bazą";
} catch (PDOException $e) {
    echo "Błąd połączenia: " . $e->getMessage();
}
