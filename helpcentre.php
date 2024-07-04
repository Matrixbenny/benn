<?php
// Configuration
$emailAddress = "officialbillionaire.ke@gmail.com";
$phoneNumber = "+254111848749";
$address = "Kiambu Rd";

// Header
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<link rel="stylesheet" href="CSS/style.css">';
echo '<title>Help Center</title>';
echo '<style>';
echo 'body { font-family: Arial, sans-serif; }';
echo 'h1, h2 { color: #0055aa; }';
echo '.section { margin-bottom: 2rem; }';
echo '</style>';
echo '</head>';

// Body
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

echo '<style>';
echo '#myAudio { background-color: rgb(0, 91, 255); width: 200px; height: 50px; }';
echo '</style>';

echo '<div style="position: relative;">';
echo '<button style="background-color: black;"><a href="index.html" style="color: white;">Home</a></button>|';
echo '<button style="background-color: black;"><a href="Games.html" style="color: white;">Games</a></button>|';
echo '<button style="background-color: black;"><a href="Movies.html" style="color: white;">Movies</a></button>|';
echo '<button style="background-color: black;"><a href="Tvshows.html" style="color: white;">Tvshows</a></button>';

echo '<button style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 50px;"><a href="Register.html" style="color: yellow;">Register</a></button>|';

echo '<button style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a href="Login.html" style="color: yellow;">Login</a></button>';

echo '<button class="email" style="color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;"><a href="mailto:' . $emailAddress . '">Email for help</a></button>';
echo '</div>';
echo '</nav>';
echo '</header>';
echo '<a href="index.html" style="font-size: 200%;"> 🔙</a>';
echo '<h1>Help Center</h1>';

// FAQs Section
echo '<div class="section">';
echo '<h2>FAQs</h2>';
echo '<p>Here are some frequently asked questions:</p>';
echo '<ul>';
echo '<li>';
echo '<strong>Question:</strong> How do I reset my password?<br>';
echo '<strong>Answer:</strong> Click on the "Forgot Password" link on the login page and follow the instructions.';
echo '</li>';
echo '<li>';
echo '<strong>Question:</strong> How do I contact customer support?<br>';
echo '<strong>Answer:</strong> You can contact us by email at <a href="mailto:' . $emailAddress . '">' . $emailAddress . '</a> or by phone at ' . $phoneNumber . '.';
echo '</li>';
echo '<li>';
echo '<strong>Question:</strong> How do I cancel my account?<br>';
echo '<strong>Answer:</strong> Log in to your account, go to the "Account Settings" page, and click on the "Cancel Account" button.';
echo '</li>';
echo '</ul>';
echo '</div>';

// Tutorials Section
echo '<div class="section">';
echo '<h2>Tutorials</h2>';
echo '<p>Here are some tutorials to help you get started:</p>';
echo '<ul>';
echo '<li><a href="About us.html">Getting Started with [BENNYTORRENT]</a></li>';
echo '<li><a href="About us.html">Advanced Features of [BENNYTORRENT]</a></li>';
echo '<li><a href="https://youtu.be/8uE6-vIi1rQ?si=NZY_rUxvhtlaaKf4">Troubleshooting Common Issues</a></li>';
echo '</ul>';
echo '</div>';

// Contact Us Section
echo '<div class="section">';
echo '<h2>Contact Us</h2>';
echo '<p>If you have any questions or concerns, please contact