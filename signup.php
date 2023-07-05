<?php
// Establish connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoai";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle the signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Insert the user details into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
