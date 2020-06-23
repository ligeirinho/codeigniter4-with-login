<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$auth = service('authentication');

		if ($auth->check())
		{
			$redirectURL = session('redirect_url') ?? '/';
			unset($_SESSION['redirect_url']);

			return redirect()->to($redirectURL);
		} else {
			return redirect()->to('login');
		}

	}

	public function showHome() {
		return $this->response->setStatusCode(200)
							  ->setBody(true);
	}	
}
