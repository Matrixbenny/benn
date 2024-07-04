<?php
// index.php

// Header section
echo '<!DOCTYPE html>';
echo '<html>';

echo '<head>';
echo '<meta charset="UTF-8" />';
echo '<link rel="stylesheet" href="CSS/style.css">';
echo '<title>BENNTORRENT/Nintendoswitch GAMES</title>'; // removed inline styles
echo '</head>';

echo '<body>';
echo '<div>';
echo '<header>';
echo '<details>';
echo '<summary class="dropdown-toggle"><span class="menu-icon"></span> Menu</summary>';
echo '<header>';
echo '<img src="images/LOGO.png" alt="Header Image" class="header-image">';
// Your header content here
echo '</header>';

// Navigation section
echo '<nav>';
echo '<audio id="myAudio" controls loop>';
echo '<source src="SL - Berlin (Lyrics).mp3">';
echo '</audio>';

// Styles for audio player
echo '<style>#myAudio { background-color: rgb(0, 91, 255); width: 200px; height: 50px; }</style>';

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

// Content section
echo '<a href="index.php" style="font-size: 200%;"> 🔙</a>';
echo '<br><br>';
echo '<img src="images/prime.png" alt="Prime Video Logo">';
echo '<h1>Prime video Movies</h1>';
echo '<br>';

echo '<div style="display: flex; justify-content: space-around; flex-wrap: wrap;">';
echo '<img src="images/h1.webp" style="width: 20%; margin-bottom: 10px;">';
echo '<img src="images/h12.webp" style="width: 20%; margin-bottom: 10px;">';
echo '<img src="images/h13.webp" style="width: 20%; margin-bottom: 10px;">';
echo '<img src="images/h14.webp" style="width: 20%; margin-bottom: 10px;">';
echo '<img src="images/h15.webp" style="width: 20%; margin-bottom: 10px;">';
echo '<img src="images/h16.webp" style="width: 20%; margin-bottom: 10px;">';
echo '<img src="images/h18.webp" style="width: 20%; margin-bottom: 10px;">';
echo '<img src="images/h17.webp" style="width: 20%; margin-bottom: 10px;">';
echo '<img src="images/h19.webp" style="width: 20%; margin-bottom: 10px;">';
echo '</div>';

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