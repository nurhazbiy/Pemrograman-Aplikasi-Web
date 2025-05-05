# 📂 PDF Upload Project

This project allows users to upload PDF files securely and view the uploaded files in a user-friendly interface. It includes user authentication to restrict access to certain features.

---

## 📌 Features

✅ **Secure PDF Upload**: Users can upload PDF files, which are validated and stored securely.  
✅ **User Authentication**: Only logged-in users can upload and view files.  
✅ **File Viewer**: Uploaded files are displayed in a grid layout, styled like Google Drive.  
✅ **Responsive Design**: The interface is mobile-friendly and adapts to different screen sizes.  
✅ **User Menu**: A dropdown menu shows the logged-in user's username and provides a logout option.

---

## 📂 Project Structure
```
/06-pdf-upload/ 
│── index.php # Main page for uploading PDF files 
│── upload.php # Handles file uploads 
│── view_uploads.php # Displays uploaded files 
│── logout.php # Handles user logout 
│── uploads/ # Directory to store uploaded files 
│── readme.md # Documentation for this project
```

---

## 🎯 How to Use

### 1️⃣ **Set Up the Project**
- Ensure you have PHP installed on your system.
- Start a local PHP server in the project directory:
  ```bash
  php -S localhost:8000
  ```
### 2️⃣ Log In
Navigate to http://localhost:8000/index.php.
Log in using your credentials or register a new account.
### 3️⃣ Upload a PDF File
Once logged in, use the upload form on the homepage to upload a PDF file.
Only files with the .pdf extension are allowed.
### 4️⃣ View Uploaded Files
Navigate to the "View Uploads" page to see all uploaded files.
Click on a file to open it in a new tab.
### 5️⃣ Log Out
Use the dropdown menu in the top-right corner to log out.

---
## 🚀 Future Improvements

- 🔹 Add support for multiple file types (e.g., images, documents).
- 🔹 Implement file deletion functionality.
- 🔹 Add pagination for the file viewer.
- 🔹 Enhance security with file size limits and stricter validation.

---

## 🛠️ Technologies Used

- PHP: Backend scripting language for handling file uploads and user authentication.
- Tailwind CSS: Utility-first CSS framework for styling the interface.
- HTML: Markup language for structuring the web pages.
- JavaScript: For dropdown menu functionality.