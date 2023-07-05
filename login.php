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

// Handle the login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the provided username and password exist in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}

mysqli_close($conn);
?>
