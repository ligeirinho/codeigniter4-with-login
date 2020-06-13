<?php namespace App\Controllers;

class DashboardController extends BaseController
{
	public function index()
	{
		helper('auth');
		$logged_in = logged_in();
		$user = user();

		$data = [
			'logged_in' => $logged_in,
			'user' => $user
		];

		return view('dashboard', $data);
	}

	public function showHome() {
		return $this->response->setStatusCode(200)
							  ->setBody(true);
	}	
}
