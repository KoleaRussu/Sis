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
                <a class="nav_link" href="MEN.">MEN</a>
                <a class="nav_link" href="New.php">NEW</a>
                <a class="nav_link" href="New.php">NEW</a>
            </nav>
        </div>
    </div>
</header>
    <div class="new_text">
        <h2>New items</h2>
        <p>These are the newest <br>and best things, the best quaity.<br></p>
    </div>

<div>
    <?php 
        $arr = ['assets/images/1.jpg','assets/images/2.jpg','assets/images/3.jpg','assets/images/4.jpg','assets/images/5.jpg','assets/images/6.jpg'];
        for($i = 0; $i < 5; $i++){
        
     echo '<div class="new_sotion">
        <div>
            <img src='.$arr[$i].' alt="">
            <h3 class="section_divtext"><a href="#">Sneakers</a></h3>
        </div>';
        }
        ?>
</div>

        <p>Buy the most interesting things
            <?php
                $image = "assets/images/Buy23.jpg";
                if ($image) {
                    echo '<img src='".$image."'>
                    <h5 class="baner_text3">CLOTHESFORYOU</h5>
                    <p class="baner_textp">nexpensive but very high quality products at the <br>best prices, hit the shop and go shopping.<br></p>
                    <a class="baner_texta" href=''>Shop</a>';
                } else {
                    echo 'No baner';
                }
            ?>
        </p>

</footer>
</body>