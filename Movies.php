<?php
// Connect to database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// Query to retrieve movies
$sql = "SELECT * FROM movies";
$result = mysqli_query($conn, $sql);

// Check if query is successful
if (!$result) {
    die("Query failed: ". mysqli_error($conn));
}

// Retrieve movies
$movies = array();
while ($row = mysqli_fetch_assoc($result)) {
    $movies[] = $row;
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="CSS/style.css">
    <title style="font-style: unset; text-decoration: blue;">BENNTORRENT/MOVIES</title>
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
                        <button style="background-color: black;"><a href="index.html" style="color: white;">Home</a>
                        </button>|
                        <button style="background-color: black;"><a href="Games.html" style="color: white;">Games</a>
                        </button>|<button style="background-color: black;"> <a href="Movies.html"
                                style="color: white;">movies</a>
                        </button>| <button style="background-color: black;"><a href="Tvshows.html"
                                style="color: white;">Tvshows</a>
                        </button>

                        <button
                            style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right:  50px;"><a
                                href="Register.html" style="color: yellow;">Register</a>
                        </button>|

                        <button
                            style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a
                                href="Login.html" style="color: yellow;">Login</a></button>

                        <button class="email"
                            style="color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;"><a
                                href="mailto:Officialbillionaire.ke@gmail.com ">Email for help</a>
                        </button>
                    </div>
                </nav>
        </header>
        <a href="index.html" style="font-size: 200%;"></a>
        </P>

        <h1 style="color: darkgreen;">MOVIES</h1> <img src="images/movie.png" alt="Movie" />
        <h2 style="color: aqua;">Enjoy your next captivating movie journey</h2>
        <h2 style="color: cadetblue;">New Releases </h2>
        <div class="movies-container">
            <?php foreach ($movies as $movie) {?>
                <img src="<?php echo $movie['image'];?>" alt="<?php echo $movie['title'];?>" />
            <?php }?>
        </div>
        <h2 style="color: cadetblue;">Upcoming movies</h2>
        <div class="movies-container">
            <?php foreach ($movies as $movie) {?>
                <?php if ($movie['status'] == 'upcoming') {?>
                    <img src="<?php echo $movie['image'];?>" alt="<?php echo $movie['title'];?>" />
                <?php }?>
            <?php }?>
        </div>
        <h2 style="color: cadetblue;">In theaters</h2>
        <div class="movies-container">
            <?php foreach ($movies as $movie) {?>
                <?php if ($movie['status'] == 'in_theaters') {?>
                    <img src="<?php echo $movie['image'];?>" alt="<?php echo $movie['title'];?>" />
                <?php }?>
            <?php }?>
        </div>
        <h2 style="color: cadetblue; size: 4cm;">Best movies on ;</h