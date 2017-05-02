<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
	public function pageAccueil(){
		include '../public/header.php';
		include '../public/home.php';
		return '<h1>hello</h1>';
		include '../public/footer.php';
	}
	
	public function home(){
		include '../public/header.php';
		include '../public/home.php';
		include '../public/footer.php';

	}

}
