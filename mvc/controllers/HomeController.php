<?php
namespace Mvc\Controllers;

use Controller;

class HomeController extends Controller{
    protected $slide_model;
    protected $news_type_model;
    protected $news_model;
    function __construct()
    {
        $this->slide_model = $this->model('SlideModel');
        $this->news_type_model = $this->model('NewsTypeModel');
        $this->news_model = $this->model('NewsModel');
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
        
        
        $this->view("layout", [
            'page' => 'home',
            'slides' => $slides,
            'news' => $news
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
        $this->view("layout", [
            'page' => 'product',
            'title_page' => 'Products'
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
        $this->view("layout", [
            'page' => 'pricing',
            'title_page' => 'Pricing'
        ]);
    }

    public function contact()
    {
        $this->view("layout", [
            'page' => 'contact',
            'title_page' => 'Contact'
        ]);
    }
}