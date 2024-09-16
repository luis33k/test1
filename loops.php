<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "PHP Iteration Structures Example"; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
    echo "<h1>PHP Iteration Structures</h1>";

    echo "<h2>While Loop</h2>";
    $i = 1;
    while ($i <= 5) {
        echo "<p>while loop iteration: $i</p>";
        $i++;
    }

    echo "<h2>Do-While Loop</h2>";
    $j = 1;
    do {
        echo "<p>do-while loop iteration: $j</p>";
        $j++;
    } while ($j <= 5);

    echo "<h2>For Loop</h2>";
    for ($k = 1; $k <= 5; $k++) {
        echo "<p>for loop iteration: $k</p>";
    }

    echo "<h2>Foreach Loop</h2>";
    $colors = ["Red", "Green", "Blue"];
    foreach ($colors as $color) {
        echo "<p>foreach loop: $color</p>";
    }

    echo "<h2>Break and Continue</h2>";
    for ($x = 1; $x <= 10; $x++) {
        if ($x == 6) {
            break; 
        }
        if ($x % 2 == 0) {
            continue;
        }
        echo "<p>break and continue example: $x</p>";
    }
	
	echo "<li><a href='page_control.php'>Click to be redirected back to Home.</a></li>";
    ?>
</body>
<footer> Copyright Luis G. 2024</footer>
</html>
