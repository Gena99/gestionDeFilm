<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
	public function pageAccueil(){
		return '<h1>hello</h1>';
	}
}
