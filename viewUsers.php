<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENNYTORRENT🎮🕹️👾</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        /* Add some basic styles to make it look better */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        
      .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
      .nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }
        
      .nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
        }
        
      .nav li {
            margin-right: 20px;
        }
        
      .nav a {
            color: #fff;
            text-decoration: none;
        }
        
      .nav a:hover {
            color: #ccc;
        }
        
      .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        
      .footer {
            background-color: black;
            color: #fff;
            padding: 10px;
            text-align: center;
            clear: both;
        }
        
      .footer-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
        }
        
      .footer-links li {
            margin-right: 20px;
        }
        
      .footer-links a {
            color: #fff;
            text-decoration: none;
        }
        
      .footer-links a:hover {
            color: #ccc;
        }
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Games.php">Games</a></li>
                    <li><a href="Movies.php">Movies</a></li>
                    <li><a href="Tvshows.php">TV Shows</a></li>
                    <li>
                    <?php
                    if (isset($_SESSION["Control"])){
                       ?>
                        <div class = "usertitle">
                            Hello <?php print  $_SESSION["Control"]["fullname"];?>
                        </div>
                    <?php
                    }
                   ?>
                    </li>
                    <li><a href="mailto:Officialbillionaire.ke@gmail.com">Email for help</a></li>
                </ul>
            </nav>
            <audio id="myAudio" controls loop>
                <source src="SL - Berlin (Lyrics).mp3">
            </audio>
        </div>
    </header>
    <main class="main">
        <!-- Your main content here -->
    </main>
    <footer class="footer">
        <div class="container">
            <p>Copyright © 2023 BennyTorrent</p>
            <ul class="footer-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
            </ul>
        </div>
    </footer>
    <script src="bootstrap/js/index.umd.js"></script>
</body>
</html>