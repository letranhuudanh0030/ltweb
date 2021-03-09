<?php
namespace Mvc\Controllers\Be;

use Controller;

class GeneralController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function media()
    {
        $this->view('master', [
            'page' => 'media',
            'title_page' => 'Media'
        ]);
    }
}
