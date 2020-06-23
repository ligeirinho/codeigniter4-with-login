<?php namespace App\Controllers;

class DashboardController extends BaseController
{
	public function index()
	{
		helper('auth');

		$auth = service('authentication');
		
		if (!logged_in())
			return redirect()->to('login');

		$user = user();

		$config = config('Auth');

		$data = [
			'logged_in' => logged_in(),
			'user' => $user,
			'auth' => $auth->check(),
			'config' => $config
		];

		return view('dashboard', $data);
	}

	public function showHome() {
		return $this->response->setStatusCode(200)
							  ->setBody(true);
	}	
}
