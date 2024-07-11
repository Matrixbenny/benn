<?php
/*****************
 A PHP file to enable users processes. Including signup,signin,edit/update and delete.
 /***** */
 //Import the database connection
 require_once "../includes/connection.php";
 
 //Signup process
 if (isset($_POST["register"])){
    //Variable declaration
    $fullname = mysqli_real_escape_string($conn,$_POST["fullname"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $username = mysqli_real_escape_string($conn,$_POST["username"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $confirmpassword = mysqli_real_escape_string($conn,$_POST["confirmpassword"]);
    $usertype = mysqli_real_escape_string($conn,$_POST["usertype"]);
    
    //Check if the password and confirm-password are similar
    if ($password!= $confirmpassword) {
        header("Location:../Register.php?error=password_mismatch");
        exit();
    }
    
    //Encrypting the password
    $hash_password = password_hash($confirmpassword, PASSWORD_DEFAULT);
    
    //Inserting data into the users table
    $user_insert = "INSERT INTO users(fullname, username, email, password, usertype) VALUES ('$fullname', '$username', '$email', '$hash_password', '$usertype')";
    
    //Executing the sql query
    if ($conn->query($user_insert) === TRUE) {
        header("Location:../Login.php");
        exit();
    } else {
        die("Failed to insert the new record". $conn->error);
    }
    
    $conn->close();
    header("Location: ../index.php");

}

?>