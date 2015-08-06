<?php namespace App\Http\Controllers;

use App\Product;
use App\Upload;
use DB;

class ProductController extends Controller {

	public function __construct()
	{
		$this->middleware('admin');
	}

	public function rollback(){
		Product::truncate();
		DB::statement("INSERT INTO barang SELECT * FROM barang_backup;");
		Upload::where('status', '=', 1)->delete();
		return redirect('product');
	}

}