<?php

namespace Mvc\Controllers\Be;

use Controller;

class DashboardController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $type = $this->model("ProductTypeModel");

        $this->view('master', [
            'page' => 'dashboard',
        ]);
    }
}
