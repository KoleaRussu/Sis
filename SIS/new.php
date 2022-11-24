<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/collectionstyle.css">
    <link rel="stylesheet" href="../GTR/CSS/responsive.css">
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
                <a class="nav_link" href="index.php">Home</a>
                <a class="nav_link" href="new.php">Collection</a>
                <a class="nav_link" href="KIDS.html"></a>
        </div>
    </div>
</header>
<div id="bannercollection">
            <?php
                $image = "assets/images/Buy.jpg";
                if ($image) {
                    echo '<img src='".$image."'>
                    <div class="collectiontextstyle">
                    <h1>Items for the week in the new collection <br>CLOTHESFORYOU</h1>
                </div>'
                } else {
                    echo 'Winter collection';
                }
            ?>
</div>

<div class="colletiontextversions">
    <h2>Versions of how to dress today</h2>
</div>

<div>
    <?php 
        $colections = ['assets/images/10.jpg','assets/images/11.jpg','assets/images/12.jpg'];
        for($i = 0; $i < 3; $i++){
     echo '<div id="closescolection">
            <img src='.$colections[$i].' alt="">
        </div>';
        }
        ?>
</div>

</footer>
</body>