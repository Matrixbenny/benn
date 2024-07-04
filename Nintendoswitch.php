<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// Retrieve games data from the database
$sql = "SELECT * FROM games";
$result = mysqli_query($conn, $sql);

// Check if there are any games
if (mysqli_num_rows($result) > 0) {
    // Display games
    while($row = mysqli_fetch_assoc($result)) {
        $game_title = $row["title"];
        $game_image = $row["image"];
        echo "<img src='images/$game_image' />";
    }
} else {
    echo "No games found.";
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="CSS/style.css">
    <title>BENNYTORRENT/Nintendoswitch GAMES</title>
</head>

<body>
    <div>
        <header>
            <!-- Your header content here -->
        </header>
        <nav>
            <!-- Your navigation menu here -->
        </nav>
        <a href="index.php" style="font-size: 200%;"> 🔙</a>
        <br>
        <img src="images/tendo.png" alt="Nintendo Switch Logo">
        <h1>Nintendoswitch Games</h1>
        <br>
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
            <!-- Games will be displayed here -->
        </p>
        <footer>
            <!-- Your footer content here -->
        </footer>
    </div>
</body>

</html>