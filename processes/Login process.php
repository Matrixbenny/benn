<?php
/*****************
 A PHP file to enable users processes. Including signup,signin,edit/update and delete.
 /***** */
 //Import the database connection
 require_once "../includes/connection.php";
 
 //Login process
 if (isset($_POST["login"])){
    //Variable declaration
    $username = mysqli_real_escape_string($conn,$_POST["username"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    
    //Retrieve hashed password from the database for the entered username
    $retrieve_password_query = "SELECT password FROM users WHERE username='$username'";
    $result = $conn->query($retrieve_password_query);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["password"];
        
        //Verify the entered password with the retrieved hashed password
        if (password_verify($password, $hashed_password)) {
    // Password is correct, so start a new session
    session_start();
    $_SESSION['username'] = $username;
    // Redirect user to the index page or any authorized page
    header("Location: index.php");
    exit();
}
        } else {
            // Incorrect password
            header("Location: ../Login.php?error=incorrect_password");
            exit();
        }
    } else {
        // Username not found
        header("Location: ../Login.php?error=user_not_found");
        exit();
    }
    
    $conn->close();
}

?>
