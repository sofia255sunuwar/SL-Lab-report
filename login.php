<?php
// Start the session
session_start();

// Define the correct username and password (hardcoded for simplicity)
$correct_username = 'admin';
$correct_password = 'password123';

// Initialize message and login status variables
$message = '';
$login_error = false;

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input values from the form
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate the credentials
    if ($username === $correct_username && $password === $correct_password) {
        // Set session variable to indicate user is logged in
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = true;

        // Set a cookie to remember the user (for 30 days)
        setcookie('username', $username, time() + (30 * 24 * 60 * 60), '/');  // 30 days

        // Redirect to a protected page (or show a success message)
        header("Location: welcome.php");
        exit;
    } else {
        $message = 'Invalid username or password.';
        $login_error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Session & Cookie</title>
    <style>
        .message {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login Form</h2>
    <!-- Display login message if any -->
    <div class="message">
        <?php
        if ($message) {
            echo "<p class='" . ($login_error ? 'error' : 'success') . "'>$message</p>";
        }

        // Check if the logout parameter is set in the URL and show an alert
        if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
            echo "<script>alert('You have been logged out successfully.');</script>";
        }
        ?>
    </div>
    <!-- Login Form -->
    <form method="POST" action="">
        <div class="input-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>

        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <button type="submit" class="submit-btn">Login</button>
    </form>
</div>
</body>
</html>
