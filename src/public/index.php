<?php

try {
    $pdo = new \PDO(
        'mysql:host=db;dbname=demoDb',
        'demoUser',
        'demoPass'
    );

    echo 'Connected to DB';
} catch (\Exception $e) {
    echo($e->getMessage());
}
