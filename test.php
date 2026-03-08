<?php

// Division by zero
$a = 10 / 0;

// Undefined variable
echo $undefinedVar;
// File: security-demo.php

// 1️⃣ Hardcoded credentials (security hotspot)
$dbPassword = "SuperSecret123";

// 2️⃣ SQL Injection vulnerability
function getUser($username) {
    // Unsafe string concatenation
    $query = "SELECT * FROM users WHERE username = '$username'";
    // Normally this would be executed with a DB call
    return $query;
}

// 3️⃣ Cross-Site Scripting (XSS) vulnerability
function displayInput($input) {
    // Directly echoing user input
    echo "User said: " . $input;
}

// 4️⃣ Insecure file inclusion
function loadPage($page) {
    // Dangerous dynamic file include
    include($page . ".php");
}

// 5️⃣ Using eval (dangerous)
function runCode($code) {
    eval($code);
}

// 6️⃣ Using $_GET without validation (command injection risk)
$filename = $_GET['file'];
file_get_contents("/var/www/html/" . $filename);

// Example usage
echo getUser("admin");
displayInput($_GET['comment']);
loadPage($_GET['page']);
runCode('echo "Hello";');
