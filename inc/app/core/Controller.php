<?php

namespace App\Core;

class Controller
{
	// Layout home
	public function guest($view, $data = [])
	{
		require_once ROOT . "layouts/guest.php";
	}
	
	// layout dashboard
	public function dashboard($view, $data = [])
	{
		session_start();
		if(!isset($_SESSION['admin_name'])){
			require_once ROOT . 'app/views/login/index.php';
		}else{
			require_once ROOT . "layouts/dashboard.php";
		}
	}

	public function golongan($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	public function pelanggan($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}
	public function users($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}
}
