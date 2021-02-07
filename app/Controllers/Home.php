<?php 
namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function something()
	{
		$db = db_connect();
		$dbModel = model('\App\EntityMaps\OktatasiModMap', true, $db);
		$oktatasiModok = $dbModel->findAll();

		$data['oktatasiModok'] =$oktatasiModok;
		return view_layout('home/something', $data);
	}

	public function login()
	{
		$db = db_connect();
		$dbModel = model('\App\EntityMaps\OktatasiModMap', true, $db);
		$oktatasiModok = $dbModel->findAll();

		$data['oktatasiModok'] =$oktatasiModok;
		return view_layout('home/something', $data, 'shared/login_layout');
	}

}
