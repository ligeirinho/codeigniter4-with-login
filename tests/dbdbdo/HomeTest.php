<?php namespace CodeIgniter;

use CodeIgniter\Test\ControllerTester;
use CodeIgniter\Test\DOMParser;

class HomeTest extends \CodeIgniter\Test\CIDatabaseTestCase
// class HomeTest extends \CodeIgniter\Test\DOMParser
{
    use ControllerTester;
    // use DOMParser;

    public function setUp(): void
	{
		parent::setUp();
	}

	public function testAmIGood()
	{
		$test = defined('APPPATH');

		$result = $this->withURI('http://localhost:8080/')
                       ->controller(\App\Controllers\Home::class)
                       ->execute('showHome');

        $this->assertTrue($result->isOK());
    }
}