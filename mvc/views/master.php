<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- <base href="http://localhost/ltweb/" target="_blank"> -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/public/css/adminlte.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <?php if (isset($data['css'])) : ?>
        <?php foreach ($data['css'] as $css) : ?>
            <link rel="stylesheet" href="<?= $css; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php require_once('./mvc/views/partitals/be/navbar.php') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once('./mvc/views/partitals/be/main_sidebar.php') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php require_once("./mvc/views/pages/be/" . $data['page'] . ".php") ?>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?php require_once('./mvc/views/partitals/be/control_sidebar.php') ?>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php require_once('./mvc/views/partitals/be/footer.php') ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/public/js/adminlte.min.js"></script>
    <?php if (isset($data['js'])) : ?>
        <?php foreach ($data['js'] as $js) : ?>
            <script src="<?= $js; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <script>
        $('a.nav-link.active').closest('li.has-submenu').addClass('menu-open');
        $('a.nav-link.active').closest('li.has-submenu').find('a.a-has-submenu').addClass('active');
    </script>
</body>

</html>