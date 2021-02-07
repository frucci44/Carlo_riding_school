<?php 
namespace App\Controllers;

class Fooldal extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function valami()
	{
		$db = db_connect();
		$dbModel = model('\App\EntityMaps\OktatasiModMap', true, $db);
		$oktatasiModok = $dbModel->findAll();

		$data['oktatasiModok'] =$oktatasiModok;
		return view_layout('fooldal/valami');
	}

	public function lovak()
	{
		$lovak = array("Csinos", "Jedi", "Carlo", "Sssssaaanyii");

		$data["lok"] = $lovak;
		return view_layout('fooldal/lovak', $data);
	}

	public function login()
	{
		$db = db_connect();
		$dbModel = model('\App\EntityMaps\OktatasiModMap', true, $db);
		$oktatasiModok = $dbModel->findAll();

		$data['oktatasiModok'] =$oktatasiModok;
		return view_layout('fooldal/valami', $data, 'shared/login_layout');
	}

}
