<?php

namespace App\Controllers;

class Peserta extends BaseController
{
	public function index()
	{
		d(session()->username);
	}
}
