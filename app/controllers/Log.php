<?php 

namespace App\Controllers;

use App\Core\Controller;
class Log extends Controller {

    public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Log_model();
	}

    public function index()
    {
        $data['title'] = 'Login';
        $this->dashboard('login/index', $data);
    }
    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
//        echo $username .'<br>'. $password;

        $data['login'] = $this->model->getUser($username, $password);
//        var_dump($data['login']);

        session_start();
        if($data['login']==NULL){
            header("location:" .URL. "/404");
        }else{
            foreach($data['login'] as $row):
                $_SESSION['admin_name'] = $row['admin_name'];
                header("location:" .URL . '/dashboard');
            endforeach;
        }
    }
    public function logout()
    {
        session_start();
        session_destroy();
        header('location:' . URL . '');
    }
}