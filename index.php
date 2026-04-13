<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Crypto</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="main">
        <h3>Welcome To Crypto Funko!</h3>
        <span>Do you have any account here?</span>

        <form action="login.php" method="POST">
            <input type="email" name="email" id="email" placeholder="Write your email">
            <br>
            <input type="text" name="password" id="password" placeholder="Write your password">
            <br>
            <button type="submit">Enviar!</button>
        </form>
        <a href="cadastro.php">Don't Have a Account? Click Here!</a>
    </div>
</body>
</html>