<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require 'vendor/autoload.php';

class Dashboard extends MY_Controller {

	public function index()
	{
		view('backend/Dashboard/index');
	}
	public function table()
	{
		$daftar_user = \Orm\User::all();
		view('backend/Dashboard/table', ['daftar_user'=>$daftar_user]);
	}
	public function hapus($id)
	{
        $user = \Orm\User::find($id);
		$user -> delete();
		redirect('backend/Dashboard/table');

	}
}

