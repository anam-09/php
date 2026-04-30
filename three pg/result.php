<?php
$rno = $_POST['rno'];
$name = $_POST['name'];
$class = $_POST['class'];

$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];
$m6 = $_POST['m6'];

$total = $m1 + $m2 + $m3 + $m4 + $m5 + $m6;
$percentage = $total / 6;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marklist</title>
</head>
<body>

<h2>Student Marklist</h2>

<p><b>Roll No:</b> <?php echo $rno; ?></p>
<p><b>Name:</b> <?php echo $name; ?></p>
<p><b>Class:</b> <?php echo $class; ?></p>

<h3>Marks:</h3>
<ul>
    <li>Subject 1: <?php echo $m1; ?></li>
    <li>Subject 2: <?php echo $m2; ?></li>
    <li>Subject 3: <?php echo $m3; ?></li>
    <li>Subject 4: <?php echo $m4; ?></li>
    <li>Subject 5: <?php echo $m5; ?></li>
    <li>Subject 6: <?php echo $m6; ?></li>
</ul>

<p><b>Total Marks:</b> <?php echo $total; ?></p>
<p><b>Percentage:</b> <?php echo $percentage; ?>%</p>

</body>
</html>