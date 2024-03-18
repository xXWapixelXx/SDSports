<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../js/script.js"></script>
</head>
<body>
<!-- navigatiebalk -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php"><img src="../assets/SDLOGO.png" alt="SD Logo"></a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="producten.php">Alle Producten</a></li>
                <li><a href="winkelwagen.php">Mijn winkelmand</a></li>
                <li><a href="php\index.php">Inloggen</a></li>
            </ul>
        </nav>
    </header>
<!-- /navigatiebalk -->
<!-- totaal bedrag venster -->
    <div class="bedrag">
        <p1>Samenvatting</p1>
            <hr class="lijn1">
        <p2>Subotaal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;€<br><br>
            BTW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;€</p2>
            <hr class="lijn2">
        <p3>Totaal excl. BTW&nbsp;&nbsp;&nbsp;&nbsp;€</p3>
            <hr class="lijn3">
        <p4>Totaal incl. BTW&nbsp;&nbsp;&nbsp;&nbsp;€</p4>
            <input type="button" class="kopen" value="Doorgaan naar kassa">
        <a href="../../php/login.php" class="verplicht">Account aanmaken verplicht.</a>
    </div>
<!-- /totaal bedrag venster -->
</body>
</html>
