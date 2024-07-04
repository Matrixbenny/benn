<?php
// Connect to database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// Register and Login functionality
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($conn, $query);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Login successful, redirect to dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        // Login failed, display error message
        $error = "Invalid username or password";
    }
}

// HTML code
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="CSS/style.css">
    <title style="font-style: unset;
    text-decoration: blue;">BENNTORRENT/Games&#x1F3AE;&#x1F579;&#x1F47C;</title>
</head>

<body>
    <div>
        <header>
            <details>
                <summary class="dropdown-toggle"><span class="menu-icon"></span> Menu</summary>
                <header>
                    <img src="images/LOGO.png" alt="Header Image" class="header-image">
                    <!-- Your header content here -->
                </header>
                <nav>
                    <audio id="myAudio" controls loop>
                        <source src="SL - Berlin (Lyrics).mp3">
                    </audio>

                    <style>
                        #myAudio {
                            background-color: rgb(0, 91, 255);
                            width: 200px;
                            height: 50px;
                        }
                    </style>

                    <div style="position: relative;">
                        <button style="background-color: black;"><a href="index.php" style="color: white;">Home</a>
                        </button>|
                        <button style="background-color: black;"><a href="Games.php" style="color: white;">Games</a>
                        </button>|<button style="background-color: black;"> <a href="Movies.php"
                                style="color: white;">movies</a>
                        </button>| <button style="background-color: black;"><a href="Tvshows.php"
                                style="color: white;">Tvshows</a>
                        </button>

                        <?php if (!isset($_SESSION['username'])) {?>
                            <button
                                style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right:  50px;"><a
                                    href="Register.php" style="color: yellow;">Register</a>
                            </button>|

                            <button
                                style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a
                                    href="Login.php" style="color: yellow;">Login</a></button>
                        <?php } else {?>
                            <button
                                style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right:  50px;"><a
                                    href="profile.php" style="color: yellow;">Profile</a>
                            </button>|

                            <button
                                style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a
                                    href="logout.php" style="color: yellow;">Logout</a></button>
                        <?php }?>

                        <button class="email"
                            style="color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;"><a
                                href="mailto:Officialbillionaire.ke@gmail.com ">Email for help</a>
                        </button>
                    </div>
                </nav>
        </header>
        <a href="index.php" style="font-size: 200%;"> &#x1F448;</a>
        <h1 style="color: darkgreen;">GAMES</h1>
        <img src="images/Games.jpg" <br>
        <h2 style="color: aqua;">Enjoy your next gaming journey &#x25C9;&#x1F448;</h2>
        <h2 style="color