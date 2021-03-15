<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errort</title>
    <link rel="stylesheet" href="css/main.min.css">
</head>
<body class="errorPage">
    <header>
        <h1>Uh-Oh!</h1>
    </header>
    <main>
        <h2>Error</h2>
        <p>
            <?php echo $error_message; ?>
        </p>
        <br>
        <p>
        <h4><?php echo '<a href="vehicles_list.php">Back to Vehicles</a>';?>Back to Vehicles</h4>
        </p>
    </main>
</body>
</html>