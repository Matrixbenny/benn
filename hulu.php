<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="CSS/style.css">
    <title>BENNTORRENT/Nintendoswitch GAMES</title>
</head>

<body>
    <div>
        <header>
            <!-- Your header content here -->
        </header>
        <nav>
            <!-- Your navigation menu here -->
        </nav>
        <a href="index.html" style="font-size: 200%;"> 🔙</a>
        <p>
            <img src="images/hulu.jpeg">
            <br>
            <h1 style="text-decoration: underline; width: fit-content;">Hulu Movies</h1>
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
            <?php include 'movies.php'; ?>
        </p>
        <footer>
            <!-- Your footer content here -->
        </footer>
    </body>

</html>