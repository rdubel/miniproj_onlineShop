<!DOCTYPE html>
<html lang=en>

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
        require "config.php";
        ?>
        <main>
            <h3>Shopping Cart</h3>
            <hr>
            <table class="table table-striped table-hover table-bordered">
                <tbody>
                    <tr id='label'>
                        <th>Item</th>
                        <th>QTY</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                    </tr>
                    <?php

                    $sql = 'SELECT * FROM contains, Product WHERE contains.id_product = Product.id;';
                    $res = $mysql->query($sql);
                    while (NULL !== ($row = $res->fetch_array())) {
                        echo "<tr>";
                        echo "<td>$row[name]</td>";
                        echo "<td><button type='button' class='btn btn-default minus' data-id='$row[id]'>-</button>\n<span id='$row[id]'>$row[quantity]</span>\n<button type='button' class='btn btn-default plus' data-id='$row[id]'>+</button>\n<button class='btn btn-danger rmv' data-id='$row[id]'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></button></td>";
                        echo "<td class='uprice'>$row[price] €</td>";
                        echo "<td class='tprice'>". $row["price"] * $row["quantity"] ." €</td>";
                        echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>
            <?php
            $id = NULL;
            if (isset($_POST["button"])) {
                $id = $_POST["button"];
            }

            if ($id != NULL) {
                $sql = "SELECT quantity FROM contains WHERE id_product = $id";
                $res = $mysql->query($sql);
                $qty = $res->fetch_assoc()["quantity"];
                echo $qty . "please";

                if ($qty == NULL) {
                    $sql = "INSERT INTO contains (id_cart, id_product, quantity)
                    VALUES (1, ". $id .", 1)";
                    if ($mysql->query($sql) === TRUE) {
                        echo "success";
                    }
                    else {
                        echo "nope";
                    }
                }
                else {
                    $qty += 1;
                    $sql = "UPDATE contains SET quantity = $qty WHERE id_product = $id";
                    $mysql->query($sql);
                }

                }
             ?>
        </main>
        <?php
        require "footer.php"
        ?>
    </div>
    <script src="./static/external/slick-carousel/slick/slick.min.js" charset="utf-8"></script>
    <script src="./static/external/bootstrap/dist/js/bootstrap.js" charset="utf-8"></script>
    <script src="./static/js/script.js" charset=utf-8></script>
</body>

</html>
