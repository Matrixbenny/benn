<!DOCTYPE html>
<html>

<head>
    <title>My Website</title>
    <meta name="description" content="This is my website">
    <link rel="stylesheet" href="CSS/style.css">

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
                                href="Register.php" style="color: yellow;">Signup</a>
                        </button>|

                        <button
                            style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a
                                href="Login.php" style="color: yellow;">Login</a></button>

                        <button class="email"
                            style="color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;"><a
                                href="mailto:Officialbillionaire.ke@gmail.com ">Email for help</a>
                        </button>
                    </div>
                </nav>
        </header>
        <nav>
            <ul>
                <li><a href="/faq.php">FAQ</a></li>
                <li><a href="/rating-reviews.php">Rating and Reviews</a></li>
                <li><a href="/metascores.php">Metascores</a></li>
                <li><a href="/privacy-policy.php">Privacy Policy</a></li>
            </ul>
        </nav>
        <a href="index.php" style="font-size: 200%;"> 🔙</a>
        <h1>Welcome to My Website</h1>
        <main>
            <!-- Website content goes here -->
        </main>

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