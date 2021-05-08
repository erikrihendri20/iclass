<?php

namespace App\Controllers;

class Landingpage extends BaseController
{
	public function index()
	{
		if (session('log') == TRUE)
			return redirect()->to('peserta');
		$data['title'] = 'Iclass';
		$data['css'] = 'landingpage/index.css';
		$data['active'] = 'beranda';
		return view('landingpage/index', $data);
	}

	public function blog()
	{
		$data['title'] = 'Blog';
		$data['css'] = 'landingpage/blog.css';
		$data['active'] = 'blog';
		return view('landingpage/blog', $data);
	}

	public function blog2()
	{
		$data['title'] = 'Blog';
		$data['css'] = 'landingpage/blog.css';
		$data['active'] = 'blog';
		return view('landingpage/blog_2', $data);
	}
}
