<?php
namespace Mvc\Controllers;

use Controller;

class HomeController extends Controller{
    protected $slide_model;
    function __construct()
    {
        $this->slide_model = $this->model('SlideModel');
    }

    function index()
    {
        $slides = $this->slide_model->get_list_publish_by_order();
        $this->view("layout", [
            'page' => 'home',
            'slides' => $slides
        ]);
    }
}