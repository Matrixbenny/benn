<?php
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $movie = $_POST["movie"];
    $tvshow = $_POST["tvshow"];
    $game = $_POST["game"];

    // You can now process the form data, e.g., store it in a database
    // For demonstration purposes, let's just echo the data back
    echo "You submitted:<br>";
    echo "Movie: $movie<br>";
    echo "TV Show: $tvshow<br>";
    echo "Game: $game<br>";
  }
?>