<?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $message = $_POST["Message"];

    // Validate the form data
    if (empty($username) || empty($message)) {
      $error = "Please fill in all fields";
    } else {
      // Process the form data (e.g. send an email, store in database, etc.)
      // For this example, we'll just echo the data back to the user
      echo "Thank you for your feedback, $username!<br>";
      echo "Your message: $message";
    }
  }
?>