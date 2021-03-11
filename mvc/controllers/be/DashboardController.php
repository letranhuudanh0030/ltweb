<?php

namespace Mvc\Controllers\Be;

use Controller;

class DashboardController extends Controller
{
    protected $product_model;
    protected $news_model;
    protected $product_type_model;
    protected $news_type_model;


    function __construct()
    {
        parent::__construct();
        $this->product_model = $this->model('ProductModel');
        $this->news_model = $this->model('NewsModel');
        $this->product_type_model = $this->model('ProductTypeModel');
        $this->news_type_model = $this->model('NewsTypeModel');
    }

    function index()
    {
        $products = $this->product_model->get_list();
        $news = $this->news_model->get_list();
        $p_types = $this->product_type_model->get_list();
        $n_types = $this->news_type_model->get_list();

        $this->view('master', [
            'page' => 'dashboard',
            'products' => $products,
            'news' => $news,
            'p_types' => $p_types,
            'n_types' => $n_types
        ]);
    }
}
