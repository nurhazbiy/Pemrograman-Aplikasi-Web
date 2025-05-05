# Database Setup with PDO

![PHP Version](https://img.shields.io/badge/PHP-8.2-blue.svg) ![Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen.svg)

## 📌 Overview
This sub-project demonstrates how to set up a database connection using **PHP PDO**. It includes examples of generating random student data, displaying it in a table, and removing records. The project uses an `.env` file for managing environment variables, ensuring flexibility and security.

---

## 📂 Project Structure
```
/04-database/
│── index.php             # Main page to display and manage student data
│── db.php                # Database connection script using PDO
│── generate_handler.php  # Handles random student data generation
│── remove_handler.php    # Handles student record deletion
│── .env                  # Environment variables for database configuration
│── README.md             # Documentation for this sub-project
```

---

## 🎯 Features
✅ Secure database connection using **PDO**.  
✅ Environment-based configuration via `.env` file.  
✅ Display student data in a responsive table.  
✅ Remove student records with a single click.  
✅ Error handling for duplicate NIMs with retry logic.  

---

## 📌 How to Use

### 1️⃣ **Set Up the `.env` File**  
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

### 2️⃣ **Install Dependencies (Optional)**  
Install the required dependencies, including **Faker**, using Composer:
```bash
composer install
```

### 3️⃣ **Set Up the Database**  
Create the `students` table in your database:
```sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    nim INT NOT NULL UNIQUE
);
```

### 4️⃣ **Run the Project**  
Start a local PHP server:
```bash
php -S localhost:8000
```
Open the project in your browser:
```
http://localhost:8000/04-database/index.php
```

---

## 📌 Functionality

### Generate Random Students
- Click the **"Generate Random Students"** button to add two new students with random names and NIMs.
- The NIMs are generated randomly, and the system retries if a duplicate NIM is detected.

### Display Students
- The `index.php` page displays all students in a responsive table.
- Each row includes the student's name, NIM, and an **"Actions"** column.

### Remove Students
- Click the **"Remove"** button in the **"Actions"** column to delete a student record from the database.

---

## 📌 Code Examples

### Include the `db.php` File  
Use the `db.php` file in your project to establish a database connection:
```php
require_once __DIR__ . '/04-database/db.php';
```

### Access the `$db` Object  
The `$db` object is a PDO instance that can be used for database queries:
```php
$stmt = $db->prepare("SELECT * FROM students");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
```

### Generate Random Students
You can modify `generate_handler.php` file uses **Faker** to generate random names and NIMs:
```php
$faker = Factory::create();
$random_nim = rand(100000, 999999);
$sql = "INSERT INTO students (name, nim) VALUES 
        ('" . $faker->name() . "', $random_nim), 
        ('" . $faker->name() . "', $random_nim + 1);";
$db->exec($sql);
```

### Remove Students
The `remove_handler.php` file deletes a student record based on the NIM:
```php
$stmt = $db->prepare("DELETE FROM students WHERE nim = :nim");
$stmt->execute(['nim' => $nim]);
```

---

## 🚀 Future Improvements
- 🔹 Add support for multiple database drivers (e.g., PostgreSQL).  
- 🔹 Implement a more robust `.env` parser.  
- 🔹 Add unit tests for database connection handling.  
- 🔹 Add pagination for the students table.  
- 🔹 Improve error messages for better user feedback.

---