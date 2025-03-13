# Simple Comment System - First Implementation

![PHP Version](https://img.shields.io/badge/PHP-8.2-blue.svg) ![Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen.svg)

## Overview
This is the first project of a basic comment system using PHP. Users can submit comments, which are stored in a text file and displayed on the page.

## Technologies Used
- HTML
- CSS
- JavaScript (for basic validation)
- PHP (for form handling and file storage)

## Features
✅ Users can submit a comment.  
✅ Comments are saved in a text file (`comments.txt`).  
✅ Comments are displayed below the form.  
✅ JavaScript validates input before submission.  

## File Structure
```
comment_system/
│── index.php      # Main file
│── styles.css     # CSS styles
│── script.js      # JavaScript validation
│── comments.php   # Handle comments storage
│── comments.txt   # Text file to store comments
```

## Code Breakdown
### `index.php`
- Displays the form and comments.

### `comments.php`
- Processes the form and appends comments to `comments.txt`.

### `script.js`
- Prevents form submission if fields are empty.

## Limitations
❌ Users need to refresh the page to see new comments.  
❌ All comments are reloaded on every page load.  
