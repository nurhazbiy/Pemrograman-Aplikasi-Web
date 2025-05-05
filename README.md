# Pemrograman Aplikasi Web

![PHP Version](https://img.shields.io/badge/PHP-8.2-blue.svg) ![Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen.svg)

## 📌 Overview
This repository is used for the **Pemrograman Aplikasi Web** course, providing structured learning materials with practical examples.  
It contains multiple **projects** of a comment system, demonstrating the evolution of web development concepts using **PHP, JavaScript, and AJAX**.

A **dashboard (`index.php` and `styles.php`)** is provided at the root level to navigate between different projects.  
🔹 **Note:** The **dashboard files in the root directory are expected to change** as the project evolves.  
🔹 The **first implemented version** of the dashboard has been archived in `00-dashboard-template-first-implementation/` so students can track how it was originally structured.

---

## 📂 Project Structure
```
/Pemrograman-Aplikasi-Web/
│── index.php                             # Current dashboard (evolving)
│── styles.css                            # CSS for dashboard styling
│── 00-dashboard-template-first-implementation/  # First dashboard version
│── 01-comment-first-implementation/      # Basic comment system
│── 02-comment-fetch-api/                 # Fetch API-based implementation
│── 03-comment-fetch-api-new-comments/    # Optimized Fetch API (Only New Comments)
│── 04-database/                          # Database setup with PDO
│── 05-auth-tailwind/                     # User authentication with Tailwind CSS
│── 06-pdf-upload/                        # PDF upload system with user-friendly interface
│── README.md                             # This documentation
```

---

## 🚀 Projects

### 🟢 **00 - Dashboard Template (First Implementation)**
📌 The first implementation of the **dashboard** to navigate between different projects.  
✅ A simple **PHP dashboard** with **CSS styling**.  
✅ Provides **links** to different iterations of the project.  
🔗 [View Implementation](00-dashboard-template-first-implementation/)

### 🟢 **01 - Comment First Implementation**
📌 A basic **comment system** using PHP.  
✅ Comments are stored in a text file.  
✅ Users need to **refresh the page** to see new comments.  
🔗 [View Implementation](01-comment-first-implementation/)

### 🟢 **02 - Comment Fetch API Implementation**
📌 Uses **JavaScript Fetch API** to dynamically load comments.  
✅ Comments update **without refreshing** the page.  
❌ However, **all comments** are fetched every time, increasing server load.  
🔗 [View Implementation](02-comment-fetch-api/)

### 🟢 **03 - Comment Optimized Fetch API (Only New Comments)**
📌 An **optimized version** that fetches **only new comments** since the last update.  
✅ Uses **localStorage** to track the latest comment timestamp.  
✅ **Reduces server load** by avoiding unnecessary data retrieval.  
🔗 [View Implementation](03-comment-fetch-api-new-comments/)

### 🟢 **04 - Database Setup with PDO**
📌 A **secure database connection setup** using PHP PDO.  
✅ Environment-based configuration via `.env` file.  
✅ Error handling for connection issues with optional debug mode.  
✅ Includes **random student data generation** using **Faker**.  
✅ Displays student data in a responsive table.  
✅ Allows **deleting student records** with a single click.  
🔗 [View Implementation](04-database/)

### 🟢 **05 - User Authentication with Tailwind CSS**
📌 A **user authentication system** with login and registration pages.  
✅ Styled using **Tailwind CSS** for a modern look.  
✅ Includes **error handling** for invalid credentials and duplicate usernames.  
✅ Uses **PDO** for secure database interactions.  
🔗 [View Implementation](05-auth-tailwind/)

### 🟢 **06 - PDF Upload Project**
📌 A **PDF upload system** with a user-friendly interface.  
✅ Allows users to upload PDF files securely.  
✅ Displays uploaded files in a grid layout styled like Google Drive.  
✅ Includes user authentication to restrict access to certain features.  
🔗 [View Implementation](06-pdf-upload/)

---

## 📌 Dashboard

A **centralized dashboard (`index.php`)** is included in the root directory to access all projects.  
🔹 **The dashboard will continue to evolve**, reflecting new project features.  
🔹 The **first version** of the dashboard is preserved in `00-dashboard-template-first-implementation/`.

### 🔹 How to Use:
1. Run a local PHP server (this step is optional, do it if you don't use XAMPP):
   ```sh
   php -S localhost:8000 
   ```
2. Open your browser and visit:
   ```sh
   http://localhost:8000/ (or http://localhost/ if you use XAMPP)
   ```
3. Click on any projects to explore different implementations.

---

## 🛠 Requirements

- **PHP 8.2+**
- **Web Server (Apache, Nginx, or PHP Built-in Server)**
- **Browser (Chrome, Firefox, Edge, etc.)**

---

## 🎯 Future Examples
This repository will be expanded with more **real-world web programming examples**, including:
- **Database Integration (MySQL, PostgreSQL)**
- **Authentication & User Sessions**
- **AJAX with JSON API Handling**
- **WebSockets for Real-Time Updates**
- **PHP Frameworks (Laravel, CodeIgniter)**
- **Advanced Dashboard Features** (Dynamic Routing, Theme Customization)

Stay tuned! 🚀
