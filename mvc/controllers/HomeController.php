<?php

namespace Mvc\Controllers;

use Controller;

class HomeController extends Controller
{
    protected $slide_model;
    protected $news_type_model;
    protected $news_model;
    protected $product_model;
    protected $product_type_model;

    function __construct()
    {
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

        // pre($_POST);
        if ($_POST) {

            $to = "letrahuudanh0030@gmail.com"; // Your email here
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

        $this->send_maild($to, $subject, $comment . "\r\n\n"  . 'Name: ' . $name . "\r\n" . 'Email: ' . $mail, $headers);
    }

    //Send mail function
    function send_maild($to, $subject, $message, $headers)
    {
        if (@mail($to, $subject, $message, $headers)) {
            echo json_encode(array('info' => 'success', 'msg' => "Your message has been sent. Thank you!"));
        } else {
            echo json_encode(array('info' => 'error', 'msg' => "Error, your message hasn't been sent"));
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
