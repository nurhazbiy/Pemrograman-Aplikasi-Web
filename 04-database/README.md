# Database Setup with PDO

![PHP Version](https://img.shields.io/badge/PHP-8.2-blue.svg) ![Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen.svg)

## 📌 Overview
This sub-project is responsible for setting up the database connection using **PHP PDO**. It utilizes an `.env` file to manage environment variables for database configuration, ensuring flexibility and security.

---

## 📂 Project Structure
```
/04-database/
│── index.php    # Main page for examples
│── db.php       # Database connection script using PDO
│── .env         # Environment variables for database configuration
│── README.md    # Documentation for this sub-project
```

---

## 🎯 Features
✅ Secure database connection using **PDO**.  
✅ Environment-based configuration via `.env` file.  
✅ Error handling for connection issues with optional debug mode.  

---

## 📌 How to Use
1️⃣ **Set Up the `.env` File**  
Update the `.env` file with your database credentials:
```env
DB_HOST=localhost
DB_DATABASE=paw
DB_DSN=mysql
DB_USERNAME=root
DB_PASSWORD=
DB_CHARSET=utf8mb4
DEBUG=FALSE
```

2️⃣ **Include the `db.php` File**  
Use the `db.php` file in your project to establish a database connection:
```php
require_once __DIR__ . '/04-database/db.php';
```

3️⃣ **Access the `$db` Object**  
The `$db` object is a PDO instance that can be used for database queries:
```php
$stmt = $db->prepare("SELECT * FROM users");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
```

---

## 🚀 Future Improvements
- 🔹 Add support for multiple database drivers (e.g., PostgreSQL).  
- 🔹 Implement a more robust `.env` parser.  
- 🔹 Add unit tests for database connection handling.

---