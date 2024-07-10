<!DOCTYPE html>
<html>

    <?php
    require_once("includes/connection.php")
    ?>

<head>
    <link rel="stylesheet" href="CSS/style.css">
    <title>Registration Form</title>
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

                        <button
                            style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right:  50px;"><a
                                href="Register.php" style="color: yellow;">Register</a>
                        </button>|

                        <button
                            style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a
                                href="Login.php" style="color: yellow;">Login</a></button>

                        <button class="email"
                            style="color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;"><a
                                href="mailto:Officialbillionaire.ke@gmail.com ">Email
                                for help</a>
                        </button>
                    </div>
                </nav>
        </header>
        <br>
        <a href="index.php" style="font-size: 200%;"> 🔙</a>
        <h1 style="padding: 8;color: rgb(199, 185, 212);">Get started with a free BENNYTORRENT account to rate, review, and
            discover top games, movies,TV shows, and more!</h1>
        <h1>Register for an Account</h1>
        <form action="processes/user_processes.php" method="post" autocomplete="off">
            <label for="fullname">fullname:</label><br>
            <input type="text" id="fullname" name="fullname" required><br>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required>
            <h6>Must be at least 6 characters with 1 number and special character</h6>
            <br>
            <label for="confirmpassword">Confirm Password:</label><br>
            <input type="password" id="confirm-password" name="confirmpassword" required>
            <p id="confirm-password-error" class="error"></p>
            <div>
                <select name="usertype" required>
                    <option value="">----Please select usertype----</option>
                    <option value="Admin">Admin</option>
                    <option value="Author">Author</option>
                    <option value="User">Member</option>
                </select>
            </div>
            <br>
            <button style="border-radius: 20%;"">
                <a href=" index.php">Register</a>
            </button>
            <h6>By joining BENNYTORRENT, you agree to Bennytorrent's Terms of Use and Privacy Policy.</h6>
        </form>
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