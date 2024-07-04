<?php
// Configuration
$company_name = "Your Company Name";
$email_address = "Officialbillionaire.ke@gmail.com";
$date = "2023-02-20"; // Effective date of the privacy policy

// Header
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<link rel='stylesheet' href='CSS/style.css'>";
echo "<title>Privacy Policy</title>";
echo "<style>";
echo "body { font-family: Arial, sans-serif; }";
echo "h1, h2 { color: #0055aa; }";
echo "p { text-align: justify; }";
echo "</style>";
echo "</head>";

// Body
echo "<body>";
echo "<div>";
echo "<header>";
echo "<details>";
echo "<summary class='dropdown-toggle'><span class='menu-icon'></span> Menu</summary>";
echo "<header>";
echo "<img src='images/LOGO.png' alt='Header Image' class='header-image'>";
// Your header content here
echo "</header>";
echo "<nav>";
echo "<audio id='myAudio' controls loop>";
echo "<source src='SL - Berlin (Lyrics).mp3'>";
echo "</audio>";

echo "<style>";
echo "#myAudio { background-color: rgb(0, 91, 255); width: 200px; height: 50px; }";
echo "</style>";

echo "<div style='position: relative;'>";
echo "<button style='background-color: black;'><a href='index.html' style='color: white;'>Home</a></button>|";
echo "<button style='background-color: black;'><a href='Games.html' style='color: white;'>Games</a></button>|";
echo "<button style='background-color: black;'><a href='Movies.html' style='color: white;'>Movies</a></button>|";
echo "<button style='background-color: black;'><a href='Tvshows.html' style='color: white;'>Tvshows</a></button>";

echo "<button style='background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 50px;'>";
echo "<a href='Register.html' style='color: yellow;'>Register</a>";
echo "</button>|";

echo "<button style='background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;'>";
echo "<a href='Login.html' style='color: yellow;'>Login</a>";
echo "</button>";

echo "<button class='email' style='color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;'>";
echo "<a href='mailto:$email_address'>Email for help</a>";
echo "</button>";
echo "</div>";
echo "</nav>";
echo "<br>";
echo "</header>";
echo "<a href='index.html' style='font-size: 200%;'> 🔙</a>";
echo "<h1>Privacy Policy</h1>";
echo "<p>This privacy policy sets out how $company_name uses and protects any information that you give $company_name when you use this website.</p>";
echo "<p>$company_name is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.</p>";
echo "<p>$company_name may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from $date.</p>";

echo "<h2>What we collect</h2>";
echo "<p>We may collect the following information:</p>";
echo "<ul>";
echo "<li>Name and job title</li>";
echo "<li>Contact information including email address</li>";
echo "<li>Demographic information such as postcode, preferences and interests</li>";
echo "<li>Other information relevant to customer surveys and/or offers</li>";
echo "</ul>";

echo "<h2>What we do with the information we gather</h2>";
echo "<p>We require this information to understand your needs and provide you with a better service, and in particular for the following reasons:</p>";
echo "<ul>";
echo "<li>Internal record keeping.</li>";
echo "<li>We may use the information to improve our products and services.</li>";
echo "<li>We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.</li>";
echo "<li>From time to time, we may also use your information to contact you for market research purposes. We may contact you by email, phone, fax or mail. We may use the information to customise the website accordings