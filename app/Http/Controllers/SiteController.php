<?php namespace App\Http\Controllers;

class SiteController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('site');
	}

}
