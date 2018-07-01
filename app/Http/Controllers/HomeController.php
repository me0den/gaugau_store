<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController {

  public function showLogin () {
    return \View::make('login');
  }

  public function doLogin () {

  }
}
