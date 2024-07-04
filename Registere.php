<?php
// database connection
$conn = mysqli_connect("localhost", "root", "", "registration");

// check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get form values
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
    $stmt->bind_param("sss", $username, $email, $password);

    // set parameters and execute
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $stmt->execute();

    // redirect to login page
    header("location: login.php");
}

// close statement and connection
$stmt->close();
$conn->close();
?>

<!-- registration form -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Submit">
</form>