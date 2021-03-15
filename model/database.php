<?php
    $dsn = 'mysql:host=pxukqohrckdfo4ty.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=jlrl1bera9mi4e1s';
    $username = 'eig4mu001wig252g';
    $passowrd = 'hhi97jjpm32lxw4b';

    try {
        $db = new PDO($dsn, $username);
        //$db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = "Database Error: ";
        $error_message .= $e->getMessage();
        include('./error.php');
        exit();
    }
?>
