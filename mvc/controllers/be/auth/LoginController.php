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

        
        $user = $this->user_model->get_info('*', [
            'email' => $email,
            'publish' => 1
            ]);
            
            
        if(empty($email)){
            $error['email'] = "This field is required.";
        } else {
            if(empty($user)){
                $error['email'] = "Account does not exist";
            } 
        } 

        if(empty($password)){
            $error['password'] = "This field is required.";
        } else {
            if(!password_verify($password, $user['password'])){
                $error['password'] = "Incorrect password";
            }
        } 

        if(password_verify($password, $user['password'])){
            $_SESSION['auth'] = $user; 
            $_SESSION['user_id'] = $user['id']; 
            header('Location: /admin');
        } else {
            
            $this->view('app', [
                'page' => 'auth/login',
                'error' => $error,
                'oldEmail' => $email
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
