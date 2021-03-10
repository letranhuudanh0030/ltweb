<?php 
    require_once("./mvc/core/Controller.php");
    require_once("./mvc/core/DB.php");
    require_once("./mvc/core/Model.php");
    require_once("./mvc/core/Libs.php");

    include "./mvc/core/PHPMailer-master/src/PHPMailer.php";
    include "./mvc/core/PHPMailer-master/src/Exception.php";
    include "./mvc/core/PHPMailer-master/src/OAuth.php";
    include "./mvc/core/PHPMailer-master/src/POP3.php";
    include "./mvc/core/PHPMailer-master/src/SMTP.php";
    
    $config = include('./mvc/core/Variables.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>