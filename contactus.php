<?php
// Configuration
$recipient_email = 'Officialbillionaire.ke@gmail.com'; // Replace with your email address
$subject = 'Contact Form Submission';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Validate the form data
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Please fill in all the required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email address.';
    } else {
        // Send the email
        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Phone: $phone\n";
        $body .= "Message: $message";

        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        if (mail($recipient_email, $subject, $body, $headers)) {
            $success = 'Thank you for contacting us! We will get back to you soon.';
        } else {
            $error = 'Failed to send email. Please try again later.';
        }
    }
}
?>

<!-- HTML code remains the same, but add the following PHP code to display the error or success message -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php elseif (isset($success)): ?>
                <div class="alert alert-success"><?= $success ?></div>
            <?php endif; ?>
            <!-- Rest of the HTML code remains the same -->