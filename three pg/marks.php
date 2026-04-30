<?php
$rno = $_POST['rno'];
$name = $_POST['name'];
$class = $_POST['class'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enter Marks</title>
</head>
<body>

<h2>Enter Marks (Out of 100)</h2>

<form action="result.php" method="post">

    <!-- Hidden fields to pass data -->
    <input type="hidden" name="rno" value="<?php echo $rno; ?>">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="class" value="<?php echo $class; ?>">

    Subject 1: <input type="number" name="m1" required><br><br>
    Subject 2: <input type="number" name="m2" required><br><br>
    Subject 3: <input type="number" name="m3" required><br><br>
    Subject 4: <input type="number" name="m4" required><br><br>
    Subject 5: <input type="number" name="m5" required><br><br>
    Subject 6: <input type="number" name="m6" required><br><br>

    <input type="submit" value="Generate Marklist">

</form>

</body>
</html>