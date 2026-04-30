<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "login_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check credentials
$sql = "SELECT * FROM users 
        WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

// Authenticate user
if (mysqli_num_rows($result) > 0) {
    echo "<h2>Welcome, $username</h2>";
} else {
    echo "<h2 style='color:red;'>Invalid Username or Password</h2>";
}

mysqli_close($conn);
?>