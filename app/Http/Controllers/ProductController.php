<?php namespace App\Http\Controllers;

use App\Product;
use App\Upload;
use DB;
use Input;
use Session;
use Theme;

class ProductController extends Controller {

	public function __construct()
	{
		$this->middleware('admin');
	}

	public function index()
	{
		//die("lol");
		$query = new Product();
		$terms = [];
		for ($i=0; $i < 9; $i++) { 
			$terms[] = '';
		}

		if (Input::has('code')){
			$term = Input::get('code');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("itemcode regexp '".$term."'");
			$terms[0] = Input::get('code');
		}
		if (Input::has('price')){
			$term = Input::get('price');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("price regexp '".$term."'");
			$terms[1] = Input::get('price');
		}
		if (Input::has('itemname')){
			$term = Input::get('itemname');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("itemname regexp '".$term."'");
			$terms[2] = Input::get('itemname');
		}
		if (Input::has('name')){
			$term = Input::get('name');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("name regexp '".$term."'");
			$terms[3] = Input::get('name');
		}
		if (Input::has('model')){
			$term = Input::get('model');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("model regexp '".$term."'");
			$terms[4] = Input::get('model');
		}
		if (Input::has('spec')){
			$term = Input::get('spec');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("spec regexp '".$term."'");
			$terms[5] = Input::get('spec');
		}
		if (Input::has('registrasi')){
			$term = Input::get('registrasi');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("registrasi regexp '".$term."'");
			$terms[6] = Input::get('registrasi');
		}
		if (Input::has('kurs')){
			$term = Input::get('kurs');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("kurs regexp '".$term."'");
			$terms[7] = Input::get('kurs');
		}
		if (Input::has('merek')){
			if (Input::get('merek') != "Merek"){
				$term = Input::get('merek');
				$query = $query->whereRaw("merek = '".$term."'");
				$terms[8] = Input::get('merek');
			}
		}

		$jumlah = $query->count();
		//die(var_dump($terms));

		$products = $query->paginate(50);
		$products->setPath('');
		$pagination = $products->appends(array('code' => Input::get('code'),
			'name' => Input::get('name'),
			'itemname' => Input::get('itemname'),
			'model' => Input::get('model'),
			'spec' => Input::get('spec'),
			'registrasi' => Input::get('registrasi'),
			'kurs' => Input::get('kurs'),
			'merek' => Input::get('merek'),
			'price' => Input::get('price')));

		Session::put('progress', 0);
		Session::save();
		Session::put('progress_export', 0);
		Session::save();

		$mereks = Product::select('merek')->groupBy('merek')->get()->toArray() ;
		$merek = [];
		foreach ($mereks as $key => $value) {
			$merek[] = $value['merek'];
		}

		$canRollback = DB::select(DB::raw("SELECT COUNT(*) AS jumlah FROM `barang_backup`"))[0]->jumlah;
		//dd($canRollback);
		// var_dump($merek);
		// die();

		//$this->rrmdir(storage_path('temp'));
		try{
			if (file_exists(storage_path('temp')))
				$this->rrmdir(storage_path('temp'));
		}catch(\Exception $e){
			
		}
		return Theme::back('product')->with('products', $products)->with('pagination', $pagination)->with('terms', $terms)->with('jumlah', $jumlah)->with('merek', $merek)->with('canRollback', $canRollback);
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