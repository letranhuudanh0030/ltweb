<?php

namespace Mvc\Controllers;

use Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class HomeController extends Controller
{
    protected $slide_model;
    protected $news_type_model;
    protected $news_model;
    protected $product_model;
    protected $product_type_model;

    function __construct()
    {
        session_start();
        $this->slide_model = $this->model('SlideModel');
        $this->news_type_model = $this->model('NewsTypeModel');
        $this->news_model = $this->model('NewsModel');
        $this->product_model = $this->model('ProductModel');
        $this->product_type_model = $this->model('ProductTypeModel');
    }

    public function index()
    {
        $slides = $this->slide_model->get_list_publish_by_order();

        $news_type = $this->news_type_model->get_info("*", [
            'publish' => 1,
            'slug' => 'news'
        ]);

        $news = $this->news_model->get("*", [
            'publish' => 1,
            'type_id' => $news_type['id'],
            'highlight' => 1
        ]);


        $service_type = $this->news_type_model->get_info("*", [
            'publish' => 1,
            'slug' => 'service'
        ]);

        $services = $this->news_model->get("*", [
            'publish' => 1,
            'type_id' => $service_type['id'],
            'highlight' => 1
        ]);

        $ability_type = $this->news_type_model->get_info("*", [
            'publish' => 1,
            'slug' => 'ability'
        ]);

        $ability = $this->news_model->get("*", [
            'publish' => 1,
            'type_id' => $ability_type['id'],
            'highlight' => 1
        ]);


        $products =  $this->product_model->get_list_highlight();
        // pre($products);    
        $directory = "public/uploads/gallery";
        $gallery = glob($directory . "/*.jpg");
        // pre($gallery);

        $this->view("layout", [
            'page' => 'home',
            'title_page' => 'Trang chủ',
            'slides' => $slides,
            'news' => $news,
            'services' => $services,
            'ability' => $ability,
            'products' => $products,
            'gallery' => $gallery
        ]);
    }

    public function about()
    {
        $type = $this->news_type_model->get_info("*", [
            'publish' => 1,
            'slug' => 'about'
        ]);

        $news_about = $this->news_model->get_info("*", [
            'publish' => 1,
            'type_id' => $type['id']
        ]);

        $this->view("layout", [
            'page' => 'about',
            'title_page' => 'Giới thiệu',
            'news_about' => $news_about
        ]);
    }

    public function product()
    {
        $product_type = $this->product_type_model->get_list_publish();
        $products =  $this->product_model->get_list_publish();

        $this->view("layout", [
            'page' => 'product',
            'title_page' => 'Sản phẩm',
            'product_type' => $product_type,
            'products' => $products
        ]);
    }

    public function productDetail($slug)
    {
        $product = $this->product_model->get_info("*", [
            'slug' => $slug
        ]);
        $products =  $this->product_model->get("*", [
            'type_id' => $product['type_id'],
            'publish' => 1
        ]);
        // pre(count(explode(",",$product['image'] )));

        $this->view("layout", [
            'page' => 'product_detail',
            'title_page' => 'Chi tiết sản phẩm',
            'product' => $product,
            'products' => $products
        ]);
    }

    public function service()
    {
        $this->view("layout", [
            'page' => 'service',
            'title_page' => 'Services'
        ]);
    }

    public function pricing()
    {
        $products =  $this->product_model->get_list_publish();
        $this->view("layout", [
            'page' => 'pricing',
            'title_page' => 'Bảng giá',
            'products' => $products
        ]);
    }

    public function contact()
    {

        $this->view("layout", [
            'page' => 'contact',
            'title_page' => 'Liên hệ'
        ]);
    }

    public function sendEmail()
    {
        if ($_POST) {

            $to = "letranhuudanh0030@gmail.com"; // Your email here
            $subject = 'Message from my website'; // Subject message here

        }

        //Sanitize input data, remove all illegal characters	
        $name    = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $mail    = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
        // $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        // $website = filter_var($_POST['website'], FILTER_SANITIZE_STRING);
        $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);

        //Validation
        if ($name == '') {
            echo json_encode(array('info' => 'error', 'msg' => "Please enter your name."));
            exit();
        }
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(array('info' => 'error', 'msg' => "Please enter valid e-mail."));
            exit();
        }
        if ($comment == '') {
            echo json_encode(array('info' => 'error', 'msg' => "Please enter your message."));
            exit();
        }

        //Send Mail
        $headers = 'From: ' . $mail . '' . "\r\n" .
            'Reply-To: ' . $mail . '' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();


        $this->send_mail($mail, $to, $subject, $comment . "<br>"  .'Name: '.$name. "<br>" .'Email: '.$mail, $headers);
        $_SESSION['notice'] = "Đã gửi email";
        header('Location: contact');
    }

    //Send mail function
    function send_mail($from, $to, $subject, $message, $headers)
    {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = gethostbyname('smtp.gmail.com');  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'danh.nambo@gmail.com';                 // SMTP username
            $mail->Password = 'Nambo@12345!';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );                                // TCP port to connect to

            //Recipients
            $mail->setFrom($from, 'Contact');
            $mail->addAddress($to, 'Admin');     // Add a recipient
            // $mail->addAddress($to);               // Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
            
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }

    public function news()
    {
        $news_type = $this->news_type_model->get_info("*", [
            'publish' => 1,
            'slug' => 'news'
        ]);

        $news = $this->news_model->get("*", [
            'publish' => 1,
            'type_id' => $news_type['id'],
        ]);

        $news_latest = $this->news_model->get_list_publish_by_order([
            'publish' => 1,
            'type_id' => $news_type['id']
        ], [
            'created_at' => "DESC"
        ]);
        // pre($news_type);
        $this->view("layout", [
            'page' => 'news',
            'title_page' => 'Bài viết',
            'news_type' => $news_type,
            'news' => $news,
            'news_latest' => $news_latest
        ]);
    }

    public function newsDetail($slug)
    {

        $news = $this->news_model->get_info("*", [
            'slug' => $slug
        ]);

        $news_type = $this->news_type_model->get_info("*", [
            'publish' => 1,
            'slug' => 'news'
        ]);

        // pre($news);
        $news_latest = $this->news_model->get_list_publish_by_order([
            'publish' => 1,
            'type_id' => $news_type['id']
        ], [
            'created_at' => "DESC"
        ]);

        // pre($news_latest);

        $this->view('layout', [
            'page' => 'news_detail',
            'title_page' => 'Chi tiết bài viết',
            'news' => $news,
            'news_latest' => $news_latest
        ]);
    }
}
