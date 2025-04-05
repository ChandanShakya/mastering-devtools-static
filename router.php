<?php
// Get the requested URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If the file exists, serve it directly
if (is_file(__DIR__ . $uri)) {
    return false;
}

// Check for the root path
if ($uri == '/') {
    include __DIR__ . '/index.html';
    return true;
}

// Check if the path with .html exists
if (is_file(__DIR__ . $uri . '.html')) {
    include __DIR__ . $uri . '.html';
    return true;
}

// Default to 404
http_response_code(404);
echo "404 Not Found";