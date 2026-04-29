<?php
$conn = mysqli_connect("localhost", "root", "", "login_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check user
$sql = "SELECT * FROM users 
        WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Login Successful</h2>";
} else {
    echo "<h2>Invalid Username or Password</h2>";
}

mysqli_close($conn);
?>