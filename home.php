<?php session_start(); 

if (!isset($_SESSION["user"])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Funk</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="JS/nfts.js"></script>
</head>
<body>
    <div class="divisor"></div>

    <div class="profile">
        <div id="profile-section">
            <img src="Assets/imgs/nft1.avif" alt="Profile Photo">
            <div id="info">
                <h1>
                    Crypto Funk
                    <span id="info-email">
                        <em><?php echo($_SESSION['user']); ?></em>
                    </span>
                </h1>
                <span class="info-item">BY EEEET</span>
                <span class="info-item">ETHERUM</span>
                <span class="info-item">9,994</span>
                <span class="info-item">JUN 2017</span>
                <span class="info-item">PFPS</span>
            </div>
        </div>

        <div id="profile-info">
            <div class="span-info">
                <h4>FLOOR PRICE</h4>
                <p>26.89 ETH</p>
            </div>
            <div class="span-info">
                <h4>TOP OFFER</h4>
                <p>-</p>
            </div>
            <div class="span-info">
                <h4>TOTAL VOLUME</h4>
                <p>1.4M ETH</p>
            </div>
            <div class="span-info">
                <h4>OWNERS (UNIQUE)</h4>
                <p>3,819</p>
            </div>
            <div class="span-info">
                <button onclick="closeDivisor();" id="closeDivisor">
                    X
                </button>
            </div>
        </div>
    </div>

    <div class="clean-float"></div>

    <div class="grid">
        <script>displayNFTs();</script>
    </div>

    <footer>
        <form action="exit.php">
            <button>Need to go away?</button>
        </form>
    </footer>

</body>
<script src="JS/script.js"></script>
</html>