# Simple Comment System - Fetch API Implementation

![PHP Version](https://img.shields.io/badge/PHP-8.2-blue.svg) ![Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen.svg)

## Overview
This project improves the comment system by using **AJAX (Fetch API)** to dynamically update the comment section every few seconds **without requiring a page refresh**.

## Technologies Used
- HTML
- CSS
- JavaScript (Fetch API for dynamic updates)
- PHP (for form handling and file storage)

## Features
✅ Users can submit comments.  
✅ Comments are stored in a text file (`comments.txt`).  
✅ JavaScript **fetches comments every 3 seconds** to update the page dynamically.  

## File Structure
```
comment_system/
│── index.php      # Main file
│── styles.css     # CSS styles
│── script.js      # Fetch API for auto-updating comments
│── comments.php   # Handle comments storage
│── get_comments.php   # Fetches comments via AJAX
│── comments.txt   # Text file to store comments
```

## Code Breakdown
### `index.php`
- Loads the form.
- The comment section is updated dynamically using JavaScript.

### `comments.php`
- Handles form submission.
- Saves comments in `comments.txt`.

### `get_comments.php`
- Reads `comments.txt` and returns comments as JSON.

### `script.js`
- Uses `fetch()` to get comments from `get_comments.php` every 3 seconds.
- Updates the comment section dynamically.

## Limitations
❌ Still **fetches all comments every time**, even if only one new comment is added.  
❌ Could be **optimized to fetch only new comments** instead of reloading everything.  
