<?php
// Configuration
$db_host = 'localhost';
$db_username = 'your_username';
$db_password = 'your_password';
$db_name = 'your_database';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];

    // Validate password
    if ($password != $confirm_password) {
        $error = "Passwords do not match";
    } elseif (strlen($password) < 6 || !preg_match("/[0-9]/", $password) || !preg_match("/[!@#$%^&*()_+=-{};:'<>,./?]/", $password)) {
        $error = "Password must be at least 6 characters with 1 number and special character";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user into database
        $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $username, $email, $hashed_password);
        $stmt->execute();

        // Redirect to login page
        header("Location: Login.html");
        exit;
    }
}

// Close connection
$conn->close();
?>