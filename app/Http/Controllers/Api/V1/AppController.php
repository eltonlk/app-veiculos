<?php namespace App\Http\Controllers\Api\V1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AppController extends Controller {

  protected $repository;

  public function __construct()
  {
    $this->middleware('auth.basic');
  }

}
