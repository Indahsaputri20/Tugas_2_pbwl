<?php

namespace App\Controllers;

use App\Core\Controller;

class Users extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Users();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('users/index', $data);
	}

	public function input()
	{
		$this->dashboard('users/input');
	}

	public function simpan()
	{
		$this->model->simpan();
		header('location:' . URL . '/users');
	}

	public function edit($id)
	{
		$data = $this->model->edit($id);
		$this->dashboard('users/edit', $data);
	}

	public function update()
	{
		$data = $this->model->update();
		header('location:' . URL . '/users');
	}

	public function delete($id)
	{
		$data = $this->model->delete($id);
		header('location:' . URL . '/users');
	}
}
