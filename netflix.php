<?php
// Connect to database (assuming MySQL)
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// Define variables for page content
$page_title = "BENNYTORRENT/Netflix Movies";
$logo_image = "images/LOGO.png";
$audio_file = "SL - Berlin (Lyrics).mp3";
$menu_items = array(
    "Home" => "index.html",
    "Games" => "Games.html",
    "Movies" => "Movies.html",
    "Tvshows" => "Tvshows.html",
    "Register" => "Register.html",
    "Login" => "Login.html"
);
$email_address = "Officialbillionaire.ke@gmail.com";
$netflix_image = "images/nef.jpeg";
$movie_images = array(
    "images/pccccc1.webp",
    "images/pccccc2.webp",
    "images/pccccc3.webp",
    "images/pccccc4.webp",
    "images/pccccc5.webp",
    "images/pccccc6.webp",
    "images/pccccc7.webp",
    "images/pccccc8.webp",
    "images/pccccc9.webp"
);
$footer_links = array(
    "Help centre" => "helpcentre.html",
    "Carrers" => "carrers.html",
    "Terms of use" => "termsofuse.html",
    "Privacy Policy" => "privacypolicy.html"
);

// HTML output
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="CSS/style.css">
    <title><?= $page_title?></title>
</head>

<body>
    <header>
        <details>
            <summary class="dropdown-toggle"><span class="menu-icon"></span> Menu</summary>
            <header>
                <img src="<?= $logo_image?>" alt="Header Image" class="header-image">
                <!-- Your header content here -->
            </header>
            <nav>
                <audio id="myAudio" controls loop>
                    <source src="<?= $audio_file?>">
                </audio>

                <style>
                    #myAudio {
                        background-color: rgb(0, 91, 255);
                        width: 200px;
                        height: 50px;
                    }
                </style>

                <div style="position: relative;">
                    <?php foreach ($menu_items as $label => $link) {?>
                    <button style="background-color: black;"><a href="<?= $link?>" style="color: white;"><?= $label?></a>
                    </button>|
                    <?php }?>

                    <button style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 50px;"><a href="<?= $menu_items['Register']?>" style="color: yellow;">Register</a>
                    </button>|

                    <button style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a href="<?= $menu_items['Login']?>" style="color: yellow;">Login</a></button>

                    <button class="email" style="color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;"><a href="mailto:<?= $email_address?>">Email for help</a>
                    </button>
                </div>
            </nav>
        </header>
        <a href="index.html" style="font-size: 200%;"> 🔙</a>
        <p>
            <img src="<?= $netflix_image?>">
            <br>
        <h1 style="text-decoration: underline; width: fit-content;">Netflix Movies</h1>
        </p>
        <style>
           .image-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                grid-gap: 10px;
                justify-content: center;
            }

           .image-grid img {
                width: 100%;
                height: auto;
                object-fit: cover;
                border-radius: 5px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }
        </style>

        <p class="image-grid">
            <?php foreach ($movie_images as $image) {?>
            <img src="<?= $image?>">
            <?php }?>
        </p>
        <footer>
            <div class="links-container">
                <?php foreach ($footer_links as $label => $link) {?>
                <a href="<?= $link