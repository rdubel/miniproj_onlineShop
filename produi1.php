<?php
ini_set('display_errors, 1');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <meta http-equiv=X-UA-Compatible content=ie=edge>
    <title>Chocolate</title>
    <link rel="stylesheet" href="./static/external/bootstrap/dist/css/bootstrap.css">
    <script src="./static/external/jquery/dist/jquery.js" charset="utf-8"></script>
    <link rel="stylesheet" href="./static/external/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./static/external/slick-carousel/slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel=stylesheet href=./static/css/master.css>
    <link rel="stylesheet" href="./static/external/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
    <?php
    require "header.php";
    ?>
        <main>
            <!-- Slider -->
            <div class="row">
                <div class="col-md-5" id="slider">
                    <div class="" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                            <?php
                            echo "<div class='active item' data-slide-number='0'>";
                            echo "<img src='http://placehold.it/500x300'>";
                            echo "</div>";
                            echo "<div class='item' data-slide-number='1'>";
                            echo "<img src='http://placehold.it/500x300'>";
                            echo "</div>";
                            echo "<div class='item' data-slide-number='2'>";
                            echo "<img src='http://placehold.it/500x300'>";
                            echo "</div>";
                            echo "<div class='item' data-slide-number='3'>";
                            echo "<img src='http://placehold.it/500x300'>";
                            echo "</div>";
                            ?>
                            </div>
                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <!--/Slider-->
                </div>
                <div class="col-md-6 slider">
                    <div>
                        <?php
                        define('MYSQL_SERVEUR', 'localhost');
                        define('MYSQL_UTILISATEUR', 'remy');
                        define('MYSQL_MOTDEPASSE', 'shadowstorm');
                        define('MYSQL_BASE', 'Shop');

                        $id = $_GET['nom'];

                        $mysql = new MySQLi(MYSQL_SERVEUR,
                        MYSQL_UTILISATEUR,
                        MYSQL_MOTDEPASSE,
                        MYSQL_BASE);
                        $sql = 'SELECT * FROM Product WHERE id ='. $id . ';';

                        $res = $mysql->query($sql);
                        while (NULL !== ($row = $res->fetch_array())) {
                            echo "<h2>$row[name]</h2>";
                            echo "<h3>$row[price] €</h3>";
                            echo "<button type='button' name='button' id='tocart'>Ajout. au panier</button>";
                        }

                        ?>
                    </div>
                </div>


            </div>

            <div class="row hidden-xs" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <?php
                    echo "<li class='col-sm-1'>";
                    echo "<a class='thumbnail' id='carousel-selector-0'>";
                    echo "<img src='http://placehold.it/500x300'>";
                    echo "</a>";
                    echo "</li>";
                    echo "<li class='col-sm-1'>";
                    echo "<a class='thumbnail' id='carousel-selector-1'>";
                    echo "<img src='http://placehold.it/500x300'>";
                    echo "</a>";
                    echo "</li>";
                    echo "<li class='col-sm-1'>";
                    echo "<a class='thumbnail' id='carousel-selector-2'>";
                    echo "<img src='http://placehold.it/500x300'>";
                    echo "</a>";
                    echo "</li>";
                    echo "<li class='col-sm-1'>";
                    echo "<a class='thumbnail' id='carousel-selector-3'>";
                    echo "<img src='http://placehold.it/500x300'>";
                    echo "</a>";
                    echo "</li>";
                    ?>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-11 descIngredients">
                    <div>
                        <h2>Description</h2>
                        <?php
                        define('MYSQL_SERVEUR', 'localhost');
                        define('MYSQL_UTILISATEUR', 'remy');
                        define('MYSQL_MOTDEPASSE', 'shadowstorm');
                        define('MYSQL_BASE', 'Shop');

                        $id = $_GET['nom'];

                        $mysql = new MySQLi(MYSQL_SERVEUR,
                        MYSQL_UTILISATEUR,
                        MYSQL_MOTDEPASSE,
                        MYSQL_BASE);
                        $sql = 'SELECT * FROM Product WHERE id ='. $id . ';';

                        $res = $mysql->query($sql);
                        while (NULL !== ($row = $res->fetch_array())) {
                            echo "<p>$row[description]</p>";
                        }

                        ?>
                    </div>
                </div>


            </div>


        </main>
        <?php
        require "footer.php";
        ?>
    </div>

    <script src="./static/external/slick-carousel/slick/slick.min.js" charset="utf-8"></script>
    <script src="./static/external/bootstrap/dist/js/bootstrap.js" charset="utf-8"></script>
    <script src="./static/js/get_params.js" type="text/javascript"></script>
    <script src="./static/js/scriptprudui.js" charset=utf-8></script>

</body>


</html>
