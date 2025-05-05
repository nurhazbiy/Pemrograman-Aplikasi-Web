<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Uploaded Files</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Tailwind dropdown toggle script
        function toggleDropdown() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('hidden');
        }
    </script>
</head>

<body class="bg-gray-100">
    <?php
    session_start();
    $isLoggedIn = isset($_SESSION['username']); // Check if the user is logged in

    // Restrict access to logged-in users
    if (!$isLoggedIn) {
        $_SESSION['feedback'] = 'Error: You must be logged in to view uploaded files.';
        header('Location: index.php');
        exit;
    }
    ?>
    <header class="bg-gray-800 text-white py-4 px-6 flex justify-between items-center">
        <a href="/">
            <header class="bg-gray-800 text-white text-center">
                <h1 class="text-2xl font-bold">Pemrograman Aplikasi Web</h1>
            </header>
        </a>
        <nav class="flex items-center">
            <a href="index.php" class="text-white hover:underline mx-2">Home</a>
            <a href="view_uploads.php" class="text-white hover:underline mx-2">View Uploads</a>
            <div class="relative">
                <!-- User Menu -->
                <button onclick="toggleDropdown()" class="text-white hover:underline mx-2">
                    <?php echo htmlspecialchars($_SESSION['username']); ?> ▼
                </button>
                <div id="userDropdown" class="absolute right-0 mt-2 bg-white text-gray-800 rounded shadow-lg hidden">
                    <a href="/05-auth-tailwind/logout.php" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Uploaded Files</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <?php
            $uploadDir = __DIR__ . '/uploads/';
            if (is_dir($uploadDir)) {
                $files = array_diff(scandir($uploadDir), ['.', '..']);
                if (count($files) > 0) {
                    echo '<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">';
                    foreach ($files as $file) {
                        $filePath = 'uploads/' . $file;
                        echo '<div class="group relative bg-gray-50 border border-gray-200 rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">';
                        echo '<a href="' . htmlspecialchars($filePath) . '" target="_blank" class="block text-center">';
                        echo '<div class="text-gray-500 group-hover:text-blue-500 transition-colors">';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">';
                        echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z" />';
                        echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2v6h6" />';
                        echo '</svg>';
                        echo '<p class="text-sm font-medium truncate">' . htmlspecialchars($file) . '</p>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                    }
                    echo '</div>';
                } else {
                    echo '<p class="text-gray-600">No files uploaded yet.</p>';
                }
            } else {
                echo '<p class="text-gray-600">Uploads directory does not exist. Please upload any file first.</p>';
            }
            ?>
        </div>
    </div>
</body>

</html>