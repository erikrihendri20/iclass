<?php

namespace App\Controllers;

class Landingpage extends BaseController
{
	public function index()
	{
		$data['css'] = ['landingpage/index.css'];
		$data['active'] = 'beranda';
		return view('landingpage/index', $data);
	}

	public function blog()
	{
		$data['css'] = ['landingpage/blog.css'];
		$data['active'] = 'blog';
		return view('landingpage/blog', $data);
	}
}
