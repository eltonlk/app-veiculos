<?php namespace App\Http\Controllers;

class DashboardController extends AppController {

	public function index()
	{
		return view('dashboard.index');
	}

}
