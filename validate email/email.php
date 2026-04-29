<?php
$email = $_POST['email'];

// Validate email using PHP filter
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h3>Valid Email ID</h3>";
} else {
    echo "<h3>Invalid Email ID</h3>";
}
?>