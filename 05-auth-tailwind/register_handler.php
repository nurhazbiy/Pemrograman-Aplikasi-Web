<?php
require_once __DIR__ . '/../04-database/db.php'; // Include the database connection

// Get form data
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

try {
    // Insert user into the database
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        // Redirect back to the registration page with a success message
        header("Location: register.php?success=1");
        exit();
    } else {
        header("Location: register.php?error=error");
        exit();
    }
} catch (PDOException $e) {
    if (getenv('DEBUG') === 'TRUE') {
        echo 'Error: ' . $e->getMessage();
    } else {
        // Check for duplicate entry error
    if ($e->getCode() == 23000) { // SQLSTATE[23000]: Integrity constraint violation
        header("Location: register.php?error=duplicate");
        exit();
    }
        header("Location: register.php?error=error");
        exit();
    }
}