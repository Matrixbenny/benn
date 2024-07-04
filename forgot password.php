<?php
// forgot_password.php

// Configuration
$db_host = 'localhost';
$db_username = 'your_username';
$db_password = 'your_password';
$db_name = 'your_database';

// Connect to database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Check if email is empty
    if (empty($email)) {
        $error = "Please enter your email address.";
    } else {
        // Check if email exists in database
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Generate password reset token
            $token = bin2hex(random_bytes(16));

            // Update user table with password reset token
            $query = "UPDATE users SET password_reset_token = ? WHERE email = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $token, $email);
            $stmt->execute();

            // Send password reset email
            $subject = "Password Reset Request";
            $message = "Click on the following link to reset your password: <a href='http://example.com/reset_password.php?token=$token'>Reset Password</a>";
            $headers = "From: your_email@example.com\r\n";
            mail($email, $subject, $message, $headers);

            $success = "Password reset email sent successfully. Please check your email.";
        } else {
            $error = "Email address not found.";
        }
    }
}

// Close database connection
$conn->close();
?>

<!-- HTML code remains the same, with the addition of PHP error and success messages -->
<div class="container">
    <h1>Forgot Password</h1>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } elseif (isset($success)) { ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php } ?>
    <form method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>
</div>