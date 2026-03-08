<?php
// File: sonar-demo.php

// 1️⃣ Unused variable (code smell)
$unusedVar = 42;

// 2️⃣ Function with potential bug
function divide($a, $b) {
    // Bug: division by zero
    return $a / $b;
}

// 3️⃣ Hardcoded credentials (security hotspot)
$password = "secret123"; 

// 4️⃣ SQL injection vulnerability (security hotspot)
function getUser($username) {
    // Unsafe concatenation
    $query = "SELECT * FROM users WHERE username = '$username'";
    return $query;
}

// 5️⃣ Undefined variable (potential bug)
echo $undefinedVar;

// Run some of the functions
echo divide(10, 0);
echo getUser("admin");
