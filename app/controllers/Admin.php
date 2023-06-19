<?php

namespace App\Controllers;

use App\Core\Controller;

class Admin extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Admin();
	}

	public function index()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->guest('admin/index', $data);
	}

	public function input()
	{
		$this->dashboard('admin/input');
	}

	public function simpan()
	{
		$this->model->simpan();
		header('location:' . URL . '');
	}

	public function edit($id)
	{
		$data = $this->model->edit($id);
		$this->dashboard('admin/edit', $data);
	}

	public function update()
	{
		$data = $this->model->update();
		header('location:' . URL . '');
	}

	public function delete($id)
	{
		$data = $this->model->delete($id);
		header('location:' . URL . '');
	}
}
