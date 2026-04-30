<?php
$conn = mysqli_connect("localhost", "root", "", "login_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Welcome, $username!</h2>";
        exit(); // stop showing form
    } else {
        $message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<?php
if ($message != "") {
    echo "<p style='color:red;'>$message</p>";
}
?>

<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>

<?php mysqli_close($conn); ?>