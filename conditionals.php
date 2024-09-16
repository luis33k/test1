<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "PHP Conditional Expressions Example"; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
    echo "<h1>PHP Conditional Expressions</h1>";
    echo "<h2>Relational and Logical Operators</h2>";

    $x = 10;
    $y = 20;

    if ($x < $y) {
        echo "<p>$x is less than $y</p>";
    }

    if ($x < $y && $y > 15) {
        echo "<p>$x is less than $y and $y is greater than 15</p>";
    }

    $result = $x + $y * 2;
    echo "<p>Operator precedence: x + y * 2 = $result</p>";
	
    echo "<li><a href='page_control.php'>Click to be redirected back to Home.</a></li>";

	?>
</body>
<footer> Copyright Luis G. 2024</footer>
</html>
