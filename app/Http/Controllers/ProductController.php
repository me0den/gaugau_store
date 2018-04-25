<?php 
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController {

	public function showProductDetail($id)
	{
		// <!-- $user = User::find($id); -->
		return \View::make('detail', array());
	}
}