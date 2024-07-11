<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="CSS/style.css">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div>
        <header>
            <details>
                <summary class="dropdown-toggle"><span class="menu-icon"></span> Menu</summary>
                <header>
                    <img src="images/LOGO.png" alt="Header Image" class="header-image">
                  
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
                        <button style="background-color: black;"><a href="index.php" style="color: white;">Home</a>
                        </button>|
                        <button style="background-color: black;"><a href="Games.php" style="color: white;">Games</a>
                        </button>|<button style="background-color: black;"> <a href="Movies.php"
                                style="color: white;">movies</a>
                        </button>| <button style="background-color: black;"><a href="Tvshows.php"
                                style="color: white;">Tvshows</a>
                        </button>

                        <button
                            style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right:  50px;"><a
                                href="Register.php" style="color: yellow;">Register</a>
                        </button>|

                        <button
                            style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a
                                href="Login.php" style="color: yellow;">Login</a></button>

                        <button class="email"
                            style="color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;"><a
                                href="mailto:Officialbillionaire.ke@gmail.com ">Email for help</a>
                        </button>
                    </div>
                </nav>
        </header>
        <a href="index.php" style="font-size: 200%;"> 🔙</a>
        <div class="container">
            <h1>Forgot Password</h1>
            <form>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
</body>

</html>