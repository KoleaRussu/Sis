<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/styleclothes.css">
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
                <a class="nav_link" href="new.php">Collection</a>
                <a class="nav_link" href="men2.php">Kard</a>
            </nav>
        </div>
    </div>
</div>
</header>
<section>
<div>
    <img class="clothesstyle" src="assets/images/R125.jpg">
</div>
                    <div>
                <p class="textdescription">Description
                    <?php
                        $image = "<p class='clothestyletextdescription'>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Asperiores eum quam doloremque ducimus sapiente, <br>pariatur, totam doloribus consequatur repellat aliquid <br>illo animi fuga in adipisci nam! Soluta minus provident, <br>obcaecati error voluptatibus architecto eveniet, iste officiis<br> laborum ad quae nobis iure nisi rem incidunt. Beatae<br> consectetur error debitis aliquam voluptas!</p>";
                        if ($image) {
                            echo "<img src='".$image."'>";
                        } else {
                            echo "Netu informatii";
                        }
                    ?>
                </p>
                    </div>
<div>
    <h1 class="styletextclothes">Winter Jacket</h1>
    <p class="styleh2text">Men things</p>
    <p class="clothesprice">10$</p>
</div>
</section>
<table id="bordersize">
<tr>
<div>
<?php 
        $arr = ['XS','S','M','L','XL','XXL','XXXL'];
        for($i = 0; $i < 7; $i++){
     echo '<div id = "section">
     <div class="new_sotion">    
        <td>'.$arr[$i].'</td>';
        }
        ?>
        </div>
        </tr>
    </table>
<div>
    <a id="texth2add">Add to Card<a>
</div>
<div>
    <h4 class="reviews">Reviews in our social networks--></h4>
</div>
<div id="imgreviews">
    <img class="imgesreviews" src="assets/images/insta.png">
    <img class="imgesreviews" src="assets/images/twiter.png">
    <img class="imgesreviews" src="assets/images/vk.png">
    <img class="imgesreviews" src="assets/images/youtube.png">
    <img class="imgesreviews" src="assets/images/telegram.png">
</div>
<footer id="footer">
    <div class="footer_grid">
        <img class="footer_img" src="assets/images/Moldova.png" alt="">
    </div>
    <div class="footer_grid">
        <p class="footer_textp">Moldova</p>
    </div>
    <section id="social_network">
     <div class="social_network">
         <h6>Social Network</h6>
     </div>
        <div class="social_figrcaption">
            <a class="social_a" href="#"><img class="social_img" src="assets/images/insta.png" alt=""><span class="social_textspan">Instagram</span></a>
        </div>
</section>
</footer>
</body>