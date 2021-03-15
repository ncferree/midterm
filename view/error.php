<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
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
        <h2><?php echo '<a href="vehicles_list.php">view/vehicle_list.php</a>';?>Back to Vehicles</h2>
        </p>
    </main>
</body>
</html>