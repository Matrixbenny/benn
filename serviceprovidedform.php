<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $description = $_POST["description"];
  $category = $_POST["category"];
  $price = $_POST["price"];
  $quantity = $_POST["quantity"];

  // Validate the form data
  $errors = array();
  if (empty($name)) {
    $errors[] = "Name is required";
  }
  if (empty($description)) {
    $errors[] = "Description is required";
  }
  if (empty($category)) {
    $errors[] = "Category is required";
  }
  if (empty($price) ||!is_numeric($price)) {
    $errors[] = "Price is required and must be a number";
  }
  if (empty($quantity) ||!is_numeric($quantity)) {
    $errors[] = "Quantity is required and must be a number";
  }

  // If there are errors, display them
  if (!empty($errors)) {
    echo "<ul>";
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo "</ul>";
  } else {
    // If no errors, process the form data
    // You can insert the data into a database or perform any other action here
    echo "Form data submitted successfully!";
    // For example, let's insert the data into a MySQL database
    $conn = mysqli_connect("localhost", "username", "password", "database");
    if (!$conn) {
      die("Connection failed: ". mysqli_connect_error());
    }
    $sql = "INSERT INTO goods_or_services (name, description, category, price, quantity) VALUES ('$name', '$description', '$category', $price, $quantity)";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }
    mysqli_close($conn);
  }
}
?>