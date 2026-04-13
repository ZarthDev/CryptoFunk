<?php 
    session_start();

    $host = 'localhost';
    $db   = 'cryptofunk';
    $user = 'root';
    $pass = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM tb_nfts WHERE email = :email AND passwordkey = :passwordkey";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':passwordkey', $_POST['password']);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result["passwordkey"] == $_POST["password"]) {
            $_SESSION['user'] = $result["email"];
            header('Location: home.php');    
        }else{
            header('Location: index.php');
        }

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>