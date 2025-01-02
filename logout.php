<?php
// Start the session
session_start();

// Destroy session and delete cookies
session_unset();
session_destroy();
setcookie('username', '', time() - 3600, '/'); // Expire cookie

// Redirect to login page with a logout alert
header("Location: login.php?logout=true");
exit;