<?php
// index.php

// Header section
echo '<html>';
echo '<head>';
echo '<meta charset="UTF-8" />';
echo '<link rel="stylesheet" href="CSS/style.css">';
echo '<title>BENNyTORRENT/Max Movies</title>';
echo '</head>';

// Body section
echo '<body>';
echo '<div>';
echo '<header>';
echo '<details>';
echo '<summary class="dropdown-toggle"><span class="menu-icon"></span> Menu</summary>';
echo '<header>';
echo '<img src="images/LOGO.png" alt="Header Image" class="header-image">';
// Your header content here
echo '</header>';
echo '<nav>';
echo '<audio id="myAudio" controls loop>';
echo '<source src="SL - Berlin (Lyrics).mp3">';
echo '</audio>';

// Navigation menu
echo '<div style="position: relative;">';
echo '<button style="background-color: black;"><a href="index.php" style="color: white;">Home</a></button>|';
echo '<button style="background-color: black;"><a href="Games.php" style="color: white;">Games</a></button>|';
echo '<button style="background-color: black;"><a href="Movies.php" style="color: white;">Movies</a></button>|';
echo '<button style="background-color: black;"><a href="Tvshows.php" style="color: white;">Tvshows</a></button>';

echo '<button style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 50px;"><a href="Register.php" style="color: yellow;">Register</a></button>|';

echo '<button style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a href="Login.php" style="color: yellow;">Login</a></button>';

echo '<button class="email" style="color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;"><a href="mailto:Officialbillionaire.ke@gmail.com ">Email for help</a></button>';
echo '</div>';
echo '</nav>';
echo '</header>';
echo '<a href="index.php" style="font-size: 200%;"> 🔙</a>';
echo '<p>';
echo '<img src="images/max.jpeg" alt="Max Image">';
echo '<br>';
echo '<h1 style="text-decoration: underline; width: fit-content;">HBO Max movies</h1>';
echo '</p>';

// Image grid
echo '<style>';
echo '.image-grid {';
echo 'display: grid;';
echo 'grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));';
echo 'grid-gap: 10px;';
echo 'justify-content: center;';
echo '}';
echo '.image-grid img {';
echo 'width: 100%;';
echo 'height: auto;';
echo 'object-fit: cover;';
echo 'border-radius: 5px;';
echo 'box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);';
echo '}';
echo '</style>';

echo '<p class="image-grid">';
echo '<img src="images/pccccc1.webp" />';
echo '<img src="images/pccccc2.webp" />';
echo '<img src="images/pccccc3.webp" />';
echo '<img src="images/pccccc4.webp" />';
echo '<img src="images/pccccc5.webp" />';
echo '<img src="images/pccccc6.webp" />';
echo '<img src="images/pccccc8.webp" />';
echo '<img src="images/pccccc7.webp" />';
echo '<img src="images/pccccc9.webp" />';
echo '</p>';

// Footer section
echo '<footer>';
echo '<div class="links-container">';
echo '<a href="helpcentre.php">Help centre</a><br>';
echo '<a href="carrers.php">Carrers</a><br>';
echo '<a href="termsofuse.php">Terms of use</a><br>';
echo '<a href="privacypolicy.php">Privacy Policy</a>';
echo '</div>';
echo '</footer>';
echo '</body>';
echo '</html>';
?>