<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Sports</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">
    <script src="../js/script.js"></script>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.php"><img src="../assets/SDLOGO.png" alt="SD Logo"></a>
                </li>
                <li><a href="index.php">Home</a></li>
                <li><a href="producten.php">Alle Producten</a></li>
                <li><a href="winkelwagen.php">Mijn winkelmand</a></li>
                <li><a href="php\index.php">Inloggen</a></li>
                <li>
                    <a href="./winkelwagen.php"><img src="../assets/winkelwagen.png"></a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="card">
            <div class="image">
                <img src="../assets/running1.jpg">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Nike running 3D</p>
                <p class="price"><b>$56,25</b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
        <div class="card">
            <div class="image">
                <img src="../assets/running2.jpg">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Asics runner one</p>
                <p class="price"><b>$36,00</b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
        <div class="card">
            <div class="image">
                <img src="../assets/running3.jpg">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">naKed slip on runner</p>
                <p class="price"><b>$120,99</b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
        <div class="card">
            <div class="image">
                <img src="../assets/Running1.jpeg">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Nike Runner Neo</p>
                <p class="price"><b>$123,00</b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
    </main>
    <main>
        <div class="card">
            <div class="image">
                <img src="../assets/voetbal1.jpg">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Nike Mercurial Vapor</p>
                <p class="price"><b>$150</b></p>
                <p class="discount"><b><del>$249</del></b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
        <div class="card">
            <div class="image">
                <img src="../assets/voetbal4.jpg">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Nike Mercurial Superfly</p>
                <p class="price"><b>$190</b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
        <form  action="addcartitem.php" method="POST" class="card">
            <div class="image">
                <img src="../assets/voetbalironman.jpg">
            </div>
            <div class="caption">
                <input type="hidden" name="ppic" value="voetbalironman.jpg"/>
                <input type="hidden" name="pname" value="Nike X Marvel Ironman"/>
                <input type="hidden" name="pprice" value="299"/>

                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Nike X Marvel Ironman</p>
                <p class="price"><b>$299</b></p>
            </div>
            <button class="add">Add to cart</button>
        </form>
        <div class="card">
            <div class="image">
                <img src="../assets/voetbal7-PhotoRoom.png-PhotoRoom.png">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Nike Mercurial White Purple</p>
                <p class="price"><b>$350</b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
    </main>
    <main>
        <div class="card">
            <div class="image">
                <img src="../assets/Basketbal1.jpg">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Air Jordan XX9</p>
                <p class="price"><b>$225,00</b></p>
                <p class="discount"><b><del>$250</del></b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
        <div class="card">
            <div class="image">
                <img src="../assets/Basketbal2.jpg">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Air Jordan retro 7</p>
                <p class="price"><b>$145,99</b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
        <div class="card">
            <div class="image">
                <img src="../assets/Basketbal3.jpg">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Air Jordan XX3</p>
                <p class="price"><b>$189,99</b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
        <div class="card">
            <div class="image">
                <img src="../assets/basketbal4.jpg">
            </div>
            <div class="caption">
                <p class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <p class="product_name">Nike Kyrie 4 Triple Black</p>
                <p class="price"><b>$123,00</b></p>
            </div>
            <button class="add">Add to cart</button>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Over ons</h4>
                <p>Welkom bij SDsports, SDsports bevat al jou SportDesires. Onze webwinkel is sinds kort geopend en wij hebben een groeiende selectie van limited of moeilijk te verkrijgen sportschoenen. Zie je een product hier niet staat terwijl jij denkt
                    dat het wel daar zou moeten staan? laat het weten op onze sociale media of stuur een mail. infoSD@gmail.com</p>
            </div>

            <div class="footer-section">
                <h4>Volg ons op</h4>
                <h5>Facebook
                    <h5>
                        <h5>Twitter
                            <h5>
                                <h5>Instagram
                                    <h5>
            </div>

            <div class="footer-section">
                <h4>Alle producten</h4>
                <a href="producten.php">Basketbal schoenen</a>
                <a href="producten.php">Voetbal schoenen</a>
                <a href="producten.php">Ren schoenen</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2023 SD Sports. All rights reserved.</p>
        </div>
    </footer>
</body>