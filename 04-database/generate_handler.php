<?php
include './db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate'])) {
    $maxRetries = 5; // Maximum number of retries to generate a unique NIM
    $retries = 0;

    while ($retries < $maxRetries) {
        try {
            $random_nim = rand(100000, 999999);
            $sql = "INSERT INTO students (name, nim) VALUES 
                    ('Bambang', $random_nim), 
                    ('Paijo', $random_nim + 1);";
            $db->exec($sql);
            header('Location: index.php?success=1'); // Redirect with success message
            exit;
        } catch (PDOException $e) {
            // Check if the error is due to a duplicate NIM
            if ($e->getCode() == 23000) { // 23000 is the SQLSTATE code for integrity constraint violation
                $retries++;
                continue; // Retry with a new random NIM
            } else {
                // If it's another error, rethrow it
                throw $e;
            }
        }
    }

    // If we reach here, it means we failed to generate a unique NIM after retries
    header('Location: index.php?error=unique_nim_failed');
    exit;
}