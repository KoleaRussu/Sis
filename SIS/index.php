<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600;900&display=swap" rel="stylesheet">
    <title>CLOTHESFORYOU</title>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo"><a class="header_link" href="index.html">CLOTHESFORYOU</a></div>

            <nav class="nav">
                <a class="nav_link" href="MEN.html">MEN</a>
                <a class="nav_link" href="New.html">NEW</a>
                <a class="nav_link" href="collection.html">COLLECTION</a>
                <a class="nav_link" href="card.html">CART</a>
            </nav>
        </div>
    </div>
</header>
<section id="section">

    <div class="new_text">
        <h2>New items</h2>
        <p>These are the newest <br>and best things, the best quaity.<br></p>
    </div>

<div>
    <?php 
        for($i = 0; $i < 5; $i++)
        ?>
    <div class="new_sotion">
        <div>
            <img src="img/<?php echo ($i + 1)?>.jpg" alt="">
            <h3 class="section_divtext"><a href="#">Sneakers</a></h3>
        </div>
        <?php endfor; ?>
</div>
</section>

        <p>Buy the most interesting things
            <?php
                $image = "assets/images/Buy23.jpg";
                if ($image) {
                    echo "<img src='".$image."'>";
                } else {
                    echo "<h5 class="baner_text3">CLOTHESFORYOU</h5>
                    <p class="baner_textp">nexpensive but very high quality products at the <br>best prices, hit the shop and go shopping.<br></p>
                    <a class="baner_texta" href="#">Shop</a>";
                }
            ?>
        </p>

</footer>
</body>