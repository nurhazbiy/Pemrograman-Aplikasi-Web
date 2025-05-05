<?php

// Load environment variables
$env = file_get_contents(__DIR__ . '/.env');
$lines = explode("\n", $env);

foreach ($lines as $line) {
    preg_match('/^(\w+)=(.*)$/', trim($line), $matches);
    if (isset($matches[2])) {
        putenv(trim($line));
    }
}

// Database connection settings
$db_dsn = "mysql:host=" . getenv('DB_HOST') . ";dbname=" . getenv('DB_DATABASE') . ";charset=" . getenv('DB_CHARSET');
$db_username = getenv('DB_USERNAME');
$db_password = getenv('DB_PASSWORD');

try {
    $db = new PDO($db_dsn, $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    if (getenv('DEBUG') === 'TRUE') {
        die('Connection failed: ' . $e->getMessage());
    } else {
        die('Connection failed. Error 100001');
    }
}