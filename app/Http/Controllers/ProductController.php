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
		DB::statement("TRUNCATE TABLE barang_backup;");
		Upload::where('status', '=', 1)->delete();
		Upload::where('status', 2) ->update(['status' => 1]);
		return redirect('product');
	}

}