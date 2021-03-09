<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CSource+Sans+Pro:400,300,700,600%7CPlayfair+Display:400,700,400italic' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="/public/css/fe/bootstrap.min.css" />
    <link rel="stylesheet" href="/public/css/fe/font-icons.css" />
    <link rel="stylesheet" href="/public/plugins/revolution/css/settings.css" />
    <link rel="stylesheet" href="/public/css/fe/rev-slider.css" />
    <link rel="stylesheet" href="/public/css/fe/style.css" />
    <link rel="stylesheet" href="/public/css/fe/colors/color-mint.css" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="/public/images/fe/favicon.ico">
    <link rel="apple-touch-icon" href="/public/images/fe/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/images/fe/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/images/fe/apple-touch-icon-114x114.png">
</head>

<body>
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>

    <?php require('./mvc/views/partitals/fe/navigation.php') ?>

    <div class="main-wrapper oh">
        <?php require("./mvc/views/pages/fe/".$data['page'].".php") ?>
        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>
        <?php require('./mvc/views/partitals/fe/footer.php') ?>
    </div>



    <!-- jQuery Scripts -->
    <script type="text/javascript" src="/public/js/fe/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/fe/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/js/fe/plugins.js"></script>
    <script type="text/javascript" src="/public/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/public/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/public/js/fe/rev-slider.js"></script>
    <script type="text/javascript" src="/public/js/fe/scripts.js"></script>

    <!-- Rev Slider Offline Scripts -->
    <script type="text/javascript" src="/public/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="/public/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="/public/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/public/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/public/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/public/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/public/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/public/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/public/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
</body>

</html>