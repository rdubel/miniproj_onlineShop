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
    <link rel="stylesheet" href="./static/external/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./static/external/slick-carousel/slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="./static/external/paginate/src/jquery.paginate.css">
    <link rel="stylesheet" href="./static/external/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./static/external/seiyria-bootstrap-slider/dist/css/bootstrap-slider.css">
    <link rel=stylesheet href=./static/css/master.css>
</head>
<body>
    <div class="container">
        <?php
        require "header.php";
         ?>
        <div class="row" id="mainside">
            <div id="wrapper" data-spy="scroll" data-target="#spy" class="col-md-3">
                <!-- Sidebar -->
                <div id="sidebar-wrapper" class="">
                    <nav id="spy">

                        <ul class="sidebar-nav nav">

                            <li class=""><a href="#anch1" data-scroll="" class="" id="chocoNoirs">Chocolats Noirs</a></li>
                            <li class=""><a href="#anch2" data-scroll="" class="" id="chocoLait">Chocolots au lait</a></li>
                            <li class=""><a href="#anch3" data-scroll="" class="" id="chocoBlanc">Chocolats blancs</a></li>
                            <li class=""><a href="#anch4" data-scroll="" id="nougats">Nougats</a></li>
                            <li class=""><a href="#anch5" data-scroll="" class="" id="offrets">Offrets</a></li>
                            <li class=""><a href="#anch6" data-scroll="" class="" id="paques">Chocolats de Pâques</a></li>
                            <li>
                                Filter by price interval: <br>
                                20 <input id="ex2" type="text" class="span2" value="" data-slider-min="20" data-slider-max="50" data-slider-step="1" data-slider-value="[20,50]"/> 50</li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Page content -->
                </div>

                <div class="col-md-9">
                    <main>
                        <section id="anch1" class="cache">
                            <!-- <article class="">
                            <img src="./static/img/DSCF2007_1.jpg" alt="image1" width="150px" height="150px">
                            <p>Chocolate Negro</p>
                            <p>25.99€</p>
                            <button type="button" name="button">Acheter</button>
                        </article> -->
                        <?php
                        define('MYSQL_SERVEUR', 'localhost');
                        define('MYSQL_UTILISATEUR', 'remy');
                        define('MYSQL_MOTDEPASSE', 'shadowstorm');
                        define('MYSQL_BASE', 'Shop');

                        $mysql = new MySQLi(MYSQL_SERVEUR,
                        MYSQL_UTILISATEUR,
                        MYSQL_MOTDEPASSE,
                        MYSQL_BASE);
                        $sql = 'SELECT * FROM Product';
                        $res = $mysql->query($sql);
                        while (NULL !== ($row = $res->fetch_array())) {
                            echo "<article>";
                            echo "<img src='http://placehold.it/150x150' alt='image produit $row[id]'>";
                            echo "<h5>$row[name]</h5>";
                            echo "<p>$row[description]</p>";
                            echo "<p>$row[price] €</p>";
                            echo "<a href='produi1.php?nom=$row[id]' class='btn'>Acheter</a>";
                            echo "</article>";
                        }
                        ?>
                    </section>
                </main>
            </div>
        </div>
        <?php
        require "footer.php";
        ?>
    </div>

    <script src="./static/external/jquery/dist/jquery.js" charset="utf-8"></script>
    <script src="./static/external/slick-carousel/slick/slick.min.js" charset="utf-8"></script>
    <script src="./static/external/bootstrap/dist/js/bootstrap.js" charset="utf-8"></script>
    <script src="./static/external/paginate/src/jquery.paginate.js" type="text/javascript"></script>
    <script src="./static/external/seiyria-bootstrap-slider/dist/bootstrap-slider.js" charset="utf-8"></script>
    <script src="./static/js/scriptcatalogue.js" charset=utf-8></script>
</body>

</html>
