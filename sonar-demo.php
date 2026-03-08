<?php
// Critical bug: array access without key
$arr = [];
echo $arr['key']; // undefined index → Bug

// SQL injection
$username = $_GET['user'];
$query = "SELECT * FROM users WHERE username='$username'"; // Security hotspot
