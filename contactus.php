<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Contact Us - BENNYTORRENT🎮🕹️👾</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <header>
        <!-- Include your header content here -->
        <div style="position: relative;">
            <button style="background-color: black;"><a href="index.hphp" style="color: white;">Home</a>
            </button>|
            <button style="background-color: black;"><a href="Games.php" style="color: white;">Games</a>
            </button>|<button style="background-color: black;"> <a href="Movies.php" style="color: white;">movies</a>
            </button>| <button style="background-color: black;"><a href="Tvshows.php" style="color: white;">Tvshows</a>
            </button>

            <button style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right:  50px;"><a
                    href="Register.php" style="color: yellow;">Register</a>
            </button>|

            <button style="background-color: darkmagenta; border-radius:20px;position: absolute;top: 0;right: 0;"><a
                    href="Login.php" style="color: yellow;">Login</a></button>

            <button class="email"
                style="color: mediumslateblue;background-color: black;border-radius:20px; align-content: end;"><a
                    href="mailto:Officialbillionaire.ke@gmail.com ">Email for help</a>
            </button>
        </div>
    </header>
    <br>
    <a href="index.php" style="font-size: 200%;"> 🔙</a>
    <h1>
        <center style="color: cyan;">CONTACT US 😊</center>
    </h1>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <h2 style="color: purple;">Get in touch!</h2>
                <p>Feel free to reach out to us for any inquiries, feedback, or support. We're here to help!</p>
                <form>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <select class="custom-select" id="phone-code">
                                    <option value="+254">+254 (KENYA)</option>
                                    <option value="+1">+1 (USA)</option>
                                    <option value="+44">+44 (UK)</option>
                                    <option value="+61">+61 (Australia)</option>
                                    <option value="+86">+86 (China)</option>
                                    <option value="+33">+33 (France)</option>
                                    <option value="+49">+49 (Germany)</option>
                                    <option value="+39">+39 (Italy)</option>
                                    <option value="+81">+81 (Japan)</option>
                                    <option value="+52">+52 (Mexico)</option>
                                    <option value="+55">+55 (Brazil)</option>
                                    <option value="+7">+7 (Russia)</option>
                                    <option value="+34">+34 (Spain)</option>
                                    <option value="+46">+46 (Sweden)</option>
                                    <option value="+41">+41 (Switzerland)</option>
                                    <option value="+90">+90 (Turkey)</option>
                                    <option value="+84">+84 (Vietnam)</option>
                                    <!-- Add more options for other countries here -->
                                </select>
                            </div>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                        </div>
                    </div>
                    <center>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <br>
                            <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"
                                style="height: 150px;width: 400px;border-radius: 10px;border-color: darkred;"></textarea>
                        </div>

                        <button style="background-color: gold;" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </center>
            <div class="col-sm-12 col-lg-6">
                <!-- Include any additional information or content here -->
            </div>
        </div>
    </div>
    <footer>

        <!-- Include your footer content here -->
        <div class="links-container">

            <a href="helpcentre.php">Help centre</a>
            <br>
            <a href="carrers.php">Carrers</a>
            <br>
            <a href="termsofuse.php">Terms of use</a>
            <br>
            <a href="privacypolicy.php">Privacy Policy</a>
        </div>
    </footer>
</body>

</html>