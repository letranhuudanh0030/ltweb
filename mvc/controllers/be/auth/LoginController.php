<?php
namespace Mvc\Controllers\Be\Auth;
use Controller;

class LoginController extends Controller
{
    protected $user_model;

    function __construct()
    {
        $this->user_model = $this->model('UserModel');
        session_start();
    }

    public function index()
    {
        $this->view('app', [
            'page' => 'auth/login',
            'error' => null
        ]);
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $error = [];

        if(empty($email)){
            $error['email'] = "This field is required.";
        } 
        if(empty($password)){
            $error['password'] = "This field is required.";
        }

        $user = $this->user_model->get_info('*', [
            'email' => $email,
            'publish' => 1
        ]);

        if(password_verify($password, $user['password'])){
            $_SESSION['auth'] = $user; 
            $_SESSION['user_id'] = $user['id']; 
            header('Location: /admin');
        } else {
            $this->view('app', [
                'page' => 'auth/login',
                'error' => $error
            ]);
        }

    }

    public function logout()
    {
        unset($_SESSION["auth"]);
        unset($_SESSION["user_id"]);
        header("Location: /login");
    }
}
