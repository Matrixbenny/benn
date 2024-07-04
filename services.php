<?php
// index.php

// Define the data for the table
$data = array(
    array("HBO MAX", "NINTENDO SWITCH", "RETURNING SHOWS"),
    array("NETFLIX", "PC", "NEW RELEASES"),
    array("HULU", "PS5", "UPCOMING RELEASES"),
    array("PRIME VIDEO", "UPCOMING MOVIES", "NEW TVSHOWS")
);

// Start the HTML document
echo '<!DOCTYPE html>';
echo '<html>';

// Head section
echo '<head>';
echo '<link rel="stylesheet" href="CSS/style.css">';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<title>Entertainment Hub</title>'; // Add a title to the page
echo '</head>';

// Back to index link
echo '<a href="index.html" style="font-size: 200%;"> 🔙</a>';

// Body section
echo '<body>';
echo '<center>';
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>MOVIES</th>';
echo '<th>GAMES</th>';
echo '<th>TVSHOWS</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// Loop through the data and generate the table rows
foreach ($data as $row) {
    echo '<tr>';
    echo '<td>' . $row[0] . '</td>';
    echo '<td>' . $row[1] . '</td>';
    echo '<td>' . $row[2] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '</center>';

// Script tag (no src attribute, so it won't load any script)
echo '<script src="" async defer></script>';

echo '</body>';
echo '</html>';