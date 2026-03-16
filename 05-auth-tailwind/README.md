# 📌 Dashboard Template - User Authentication Implementation

![PHP Version](https://img.shields.io/badge/PHP-8.2-blue.svg) ![Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen.svg)

## 📌 Overview
This folder contains the **dashboard template** for navigating different projects in the **Pemrograman Aplikasi Web** repository.  
This version now uses purely Tailwind for CSS styling for the dashboard and forms.  
This version includes user authentication features with login and registration functionalities.

---

## 📂 Project Structure
```
/05-auth-tailwind/
│── index.php        # Main dashboard page
│── login.php        # User login page
│── register.php     # User registration page
│── logout.php       # Handles user logout
│── login_handler.php # Handles login form submissions
│── register_handler.php # Handles registration form submissions
│── README.md        # Documentation for this version
```


---

## 🎯 Features
✅ **Simple PHP dashboard** with a clean layout  
✅ **User authentication** with login and registration forms  
✅ **Navigation links** to various project iterations  
✅ **Pure Tailwind CSS styling** for a modern look  

---

## 📌 How to Use

### 1️⃣ **Set Up the Database**
1. Create a MySQL database named `paw` (or update the name in the `.env` file).
```sql
CREATE DATABASE paw CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
```

2. Run the following SQL query to create the `users` table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

1️⃣ **Run a local PHP server** (or use XAMPP):
```sh
php -S localhost:8000
```
2️⃣ **Open your browser** and visit:
```
http://localhost:8000/00-dashboard-template/index.php
```
3️⃣ **Navigate to the login or registration page** to authenticate or create a new account.

---

## 🚀 Future Improvements
As the main dashboard (`index.php`) evolves, this version remains **archived** for educational purposes.  
Future improvements may include:
- 🔹 **Dynamic project listings** from a database  
- 🔹 **Custom themes** for different UI styles  
- 🔹 **User authentication** enhancements for better security  

Stay tuned! 🚀