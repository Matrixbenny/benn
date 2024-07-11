<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login Form</title>
</head>

<body>
    <header>
        <nav>
            <img src="images/LOGO.png" alt="Header Image" class="header-image">
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
            <div>
                <button><a href="index.php" style="color: white;">Home</a></button>|
                <button><a href="Games.php" style="color: white;">Games</a></button>|<button> <a href="Movies.php" style="color: white;">movies</a></button>| <button><a href="Tvshows.php" style="color: white;">Tvshows</a></button>
                <button style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 50px;"><a href="Register.php" style="color: yellow;">Register</a></button>|
                <button style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a href="Login.php" style="color: yellow;">Login</a></button>
                <button class="email" style="color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;"><a href="mailto:Officialbillionaire.ke@gmail.com ">Email for help</a></button>
            </div>
        </nav>
    </header>
    <a href="index.php" style="font-size: 200%;"> 🔙</a>
    <h1 style="padding: 10;color: olive;">👋Welcome back!</h1>
    <h1>Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="checkbox" id="checkbox" onclick="showPassword()">Show Password</input><br>
        <input type="submit" name="login" value="Login">
    </form>
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'incorrect_password') {
            echo '<p style="color: red;">Incorrect password</p>';
        } elseif ($_GET['error'] == 'user_not_found') {
            echo '<p style="color: red;">Username not found</p>';
        }
    }
    ?>
    <p>
        <a href="forgot_password.php">Forgot Password?</a>
    </p>
    <br>
    <footer>
        <div class="links-container">
            <a href="helpcentre.php">Help centre</a>
            <br>
            <a href="carrers.php">Carrers</a>
            <br>
            <a href="termsofuse.php">Terms of use</a>
            <br>
            <a href="privacypolicy.php">Privacy Policy</a>
        </div>
    </footer>
</body>

</html>