<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "PHP Page Control Example"; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
    echo "<h1>PHP Page Control</h1>";
    echo "<p>You will be redirected to the home page in 5 seconds.</p>";
    header("Refresh: 5; url=index.php");
    ?>
</body>
<footer> Copyright Luis G. 2024</footer>
</html>
