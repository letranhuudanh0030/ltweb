<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title_page'] ?></title>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CSource+Sans+Pro:400,300,700,600%7CPlayfair+Display:400,700,400italic' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="/public/canna/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/public/canna/css/font-icons.css" />
    <link rel="stylesheet" href="/public/canna/revolution/css/settings.css" />
    <link rel="stylesheet" href="/public/canna/css/rev-slider.css" />
    <link rel="stylesheet" href="/public/canna/css/style.css" />
    <link rel="stylesheet" href="/public/canna/css/colors/color-mint.css" />
    <link rel="stylesheet" href="/public/css/sweetalert2/bootstrap-4.min.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="/public/canna/img/favicon.ico">
    <link rel="apple-touch-icon" href="/public/canna/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/canna/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/canna/img/apple-touch-icon-114x114.png">

    <link rel="stylesheet" href="/public/css/fe.css">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=60490e8e9c00ae0011d417e4&product=inline-share-buttons" async="async"></script>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=312930472766287&autoLogAppEvents=1" nonce="atSQoIW9"></script>
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
    <script type="text/javascript" src="/public/canna/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/canna/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/canna/js/plugins.js"></script>
    <script type="text/javascript" src="/public/canna/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/public/canna/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/public/canna/js/rev-slider.js"></script>
    <script type="text/javascript" src="/public/canna/js/scripts.js"></script>

    <!-- Rev Slider Offline Scripts -->
    <script type="text/javascript" src="/public/canna/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="/public/canna/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="/public/canna/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/public/canna/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/public/canna/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/public/canna/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/public/canna/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/public/canna/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/public/canna/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <script src="/public/js/sweetalert2.min.js"></script>

    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    </script>

    <?php if(isset($_SESSION['notice'])): ?>
        <script>
            Toast.fire({
            icon: 'success',
            title: '<?= $_SESSION['notice'] ?>'
            })
        </script>
        <?php unset($_SESSION['notice']) ?>
    <?php endif; ?>
</body>

</html>