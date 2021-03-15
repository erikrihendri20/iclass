<?php

namespace App\Controllers;

class Landingpage extends BaseController
{
	public function index()
	{
		$data['css'] = ['landingpage/index.css'];
		$data['active'] = 'beranda';
		return view('landingpage/index',$data);
	}
}
