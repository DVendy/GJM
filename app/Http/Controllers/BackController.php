<?php namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Theme;
use Input;
use App\Product;
use Eloquent;
use DB;
use Session;

class BackController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('admin');
	}

	/**
	 * Dashboard
	 *
	 * @return void
	 */
	public function index()
	{
		return Theme::back('index');
	}

	/**
	 * User
	 *
	 * @return void
	 */
	public function user()
	{
		return Theme::back('user');
	}

	/**
	 * Product
	 *
	 * @return void
	 */
	public function product()
	{
		$products = Product::paginate(100);
		$products->setPath('');
		return Theme::back('product')->with('products', $products);
	}

	public function getProgess() {
		return Response::json(array(Session::get('progress')));
	}

	public function import()
	{
		//echo("1. " . memory_get_usage()/1000000 . " MB <br>");
		$time1 = microtime(true);

		$date_now = Carbon::now()->addHours(7);
		$now = $date_now->toDateTimeString();
		$now = str_replace(" ","_", $now);
		$now = str_replace(":","-", $now);

		$extension = Input::file('file')->getClientOriginalExtension();
		$fileName = $now.'.'.$extension;
		Input::file('file')->move(storage_path('excel/exports'), $fileName);
		//echo("2. " . memory_get_usage()/1000000 . " MB <br>");

		set_time_limit(0);
		$sung = Excel::load(storage_path('excel/exports/').$fileName)->get();
		$time2 = microtime(true);
		echo "setelah load excel: ". round(($time2-$time1), 2). "<br>"; //value in seconds

		Product::truncate();
		Eloquent::unguard();
		DB::disableQueryLog();
		

		// Excel::filter('chunk')->load(storage_path('excel/exports/').$fileName)->chunk(1000, function($results)
		// {
		// 	//echo("per 100 chunk. " . memory_get_usage()/1000000 . " MB <br>");
		// 	$users = [];
		// 	foreach($results as $key)
		// 	{
	 //        	//echo $key->spec;
	 //        	//die();
		// 		if ($key->itemcode != ""){
		// 			$users[] = [
		// 			'itemcode' => $key->itemcode,
		// 			'description' => $key->description,
		// 			'itemname' => $key->itemname,
		// 			'model' => $key->model,
		// 			'spec' => $key->spec,
		// 			'registrasi' => $key->registrasi,
		// 			'kurs' => $key->kurs,
		// 			'price' => $key->price
		// 			];
		// 		}
		// 	}
		// 	Product::insert($users);
		// });

		//die("3. " . memory_get_usage()/1000000 . " MB <br>");
		
		$i = 0;
		foreach($sung as $key)
		{
	        	//echo $key->spec;
	        	//die();
			if ($key->itemcode != ""){
				$users[] = [
				'itemcode' => $key->itemcode,
				'description' => $key->description,
				'itemname' => $key->itemname,
				'model' => $key->model,
				'spec' => $key->spec,
				'registrasi' => $key->registrasi,
				'kurs' => $key->kurs,
				'price' => $key->price
				];
			}
			if ($i == 5000){
				Product::insert($users);
				$users = [];
				$i = 0;
			}
			$i++;
		}
		//hmmm

		$time2 = microtime(true);
		echo "sampai masukin ke db: ". round(($time2-$time1), 2). "<br>"; //value in seconds
		die("tanpa chunk. " . memory_get_usage()/1000000 . " MB <br>");
		return redirect('product');
	}
	/**
	 * News
	 *
	 * @return void
	 */
	public function news()
	{
		$asd = "lol";
		return Theme::back('news')->with('asd', $asd);
	}

}
