<?php
class Controller
{
    public function __construct()
    {
        
        session_start();
        if (!isset($_SESSION['auth'])) {
            header('Location: /login');
        }   

        // if ( $_SESSION['notice'] ) {
        //     print $_SESSION['notice'];
        //     unset($_SESSION['notice']);
        // }
    }

    public function model($model)
    {
        require_once("./mvc/models/$model.php");
        return new $model;
    }

    public function view($view, $data = [])
    {
        require_once("./mvc/views/$view.php");
    }
}
