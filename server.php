<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// File ini memungkinkan kita untuk meniru fungsionalitas "mod_rewrite" Apache dari
// built-in PHP web server. Ini memberikan cara mudah untuk menguji aplikasi
// Laravel tanpa perlu menginstal perangkat lunak server "asli".
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';