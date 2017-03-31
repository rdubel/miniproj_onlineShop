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
    ?>
        <main>
            <div class="row">
                <div class="col-md-5 col-md-push-4">
                    <form data-toggle="validator" role="form">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" data-minlength="6" maxlength="15" class="form-control" id="nom" placeholder="Doe" data-toggle="tooltip" title="Tappez votre nom" required>
                            <label for="prenom">Prenom</label>
                            <input type="text" data-minlength="6" maxlength="15" class="form-control" id="prenom" placeholder="John" data-toggle="tooltip" title="Tappez votre prenom" required>
                        </div>
                        <div class="form-group">
                            <label for="sel1" class="control-label">Sujet</label>
                                <select class="form-control" id="sel1">
                                    <option>Payment bug</option>
                                    <option>Want us to fill our stock ?</option>
                                    <option>In need of any information ?</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="comment" class="control-label"></label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="eMail">Email address</label>
                            <input type="email" class="form-control" id="eMail" placeholder="Email" data-toggle="tooltip" title="Enter your Email address here." required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </form>
                </div>
            </div>
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
