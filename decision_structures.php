<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "PHP Decision Structures Example"; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
    echo "<h1>PHP Decision Structures</h1>";

    $number = 3;
	
	echo "<h2>Ternary Operator</h2>";
    $result = ($number > 0) ? "positive" : "negative";
    echo "<p>The number is $result (ternary operator)</p>";
	
    echo "<h2>Switch Statement</h2>";
    switch ($number) {
        case 1:
            echo "<p>Number is one (from switch)</p>";
            break;
        case 2:
            echo "<p>Number is two (from switch)</p>";
            break;
        default:
            echo "<p>Number is something else (from switch)</p>";
            break;
    }
	
    echo "<h2>If Statement</h2>";
    if ($number > 0) {
        echo "<p>$number is positive</p>";
    }

    echo "<h2>If-Else Statement</h2>";
    if ($number % 2 == 0) {
        echo "<p>$number is even</p>";
    } else {
        echo "<p>$number is odd</p>";
    }

    echo "<h2>If-Else else-If Statement</h2>";
    if ($number == 1) {
        echo "<p>Number is one</p>";
    } elseif ($number == 2) {
        echo "<p>Number is two</p>";
    } else {
        echo "<p>Number is something else</p>";
    }
	
	echo "<li><a href='page_control.php'>Click to be redirected back to Home.</a></li>";
    ?>
</body>
<footer> Copyright Luis G. 2024</footer>
</html>
