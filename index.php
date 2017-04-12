<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <meta http-equiv=X-UA-Compatible content=ie=edge>
    <title>Chocolate</title>
    <link rel="stylesheet" href="./static/external/bootstrap/dist/css/bootstrap.css">
    <script src="./static/external/jquery/dist/jquery.js" charset="utf-8"></script>
    <link rel="stylesheet" href="./static/external/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./static/external/slick-carousel/slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Roboto" rel="stylesheet">
    <link rel=stylesheet href=./static/css/master.css>
    <link rel="stylesheet" href="./static/external/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <?php
        require "header.php";
        ?>
        <main>
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <p id="prews">Welcome to Chocolate ! Buy your favorite sweets and enjoy the (eye) candy !</p>
                    <article class="aboutus">
                        <h2>Qui sommes nous ?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                    <div class="sliderPres">
                        <div><img src="./static/img/bg_04.jpg" width="1200px" height="300px"></div>
                        <div><img src="./static/img/4.jpg" width="1200px" height="300px"></div>
                        <div><img src="./static/img/4.jpg" width="1200px" height="300px"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <h3>Nos produits phares</h3>
                    <div class="top-products">
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
                            echo "<div class='prods'>";
                            echo "<img src='http://placehold.it/150x150' alt='image produit $row[id]'>";
                            echo "<h5>$row[name]</h5>";
                            echo "<p>$row[description]</p>";
                            echo "<p>$row[price] €</p>";
                            echo "<button type='button' name='button' >Voir la page du produit</button>";
                            echo "</div>";
                        }
                        $res->free();
                        $mysql->close();
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <?php
        require "footer.php";
        ?>
    </div>
    <script src="./static/js/catalog_x100.js" type="text/javascript"></script>
    <script src="./static/external/bootstrap/dist/js/bootstrap.js" charset="utf-8"></script>
    <script src="./static/js/scripthome.js" charset=utf-8></script>
    <script src="./static/external/slick-carousel/slick/slick.min.js" charset="utf-8"></script>
</body>

</html>
