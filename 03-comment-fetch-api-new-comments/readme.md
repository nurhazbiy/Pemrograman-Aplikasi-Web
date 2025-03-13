# Simple Comment System - Optimized Fetch (Only New Comments)

![PHP Version](https://img.shields.io/badge/PHP-8.2-blue.svg) ![Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen.svg)

## Overview
This project improves performance by **fetching only new comments** instead of reloading all comments on every fetch request. This reduces **server load** and improves efficiency.

## Technologies Used
- HTML
- CSS
- JavaScript (Fetch API with timestamp tracking)
- PHP (for form handling and file storage)

## Features
✅ Users can submit comments.  
✅ JavaScript fetches **only new comments** every 3 seconds.  
✅ Uses `localStorage` to remember the last seen comment timestamp.  
✅ **Reduces server load** by avoiding redundant data transfers.  

## File Structure
```
comment_system/
│── index.php      # Main file
│── styles.css     # CSS styles
│── script.js      # Fetch API optimized for new comments
│── comments.php   # Handle comments storage
│── get_comments.php   # Fetches only new comments via AJAX
│── comments.txt   # Text file to store comments
```

## Code Breakdown
### `index.php`
- Loads the form.
- The comment section is dynamically updated.

### `comments.php`
- Handles form submission.
- Saves comments **with timestamps** in `comments.txt`.

### `get_comments.php`
- Reads `comments.txt` and **returns only new comments** based on the last timestamp.

### `script.js`
- Uses `fetch()` to get **only new comments** from `get_comments.php`.
- **Saves the last comment timestamp** in `localStorage` to track the latest update.

## Performance Improvement
- **Before**: The page fetched **all comments** every 3 seconds.
- **Now**: The page **only fetches new comments**, reducing server load.

## Future Improvements
📌 Use **WebSockets** for instant updates without polling.  
📌 Store comments in a **MySQL database** instead of a text file.  
