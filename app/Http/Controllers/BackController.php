<?php namespace App\Http\Controllers;

use Carbon\Carbon;
use Theme;
use Input;
use App\Product;
use App\Upload;
use App\News;
use App\User;
use App\Login_H;
use Eloquent;
use DB;
use Session;
use Hash;
use Validator;
use Auth;

use Akeneo\Component\SpreadsheetParser\SpreadsheetParser;

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
		$this->middleware('marketing');
	}

	/**
	 * Dashboard
	 *
	 * @return void
	 */
	public function index()
	{
		$users = User::all();
		
		foreach ($users as $key => $value) {
			if ($value->role != "admin" && $value->login_h->count() != 0)
				$top[$value->name] = $value->login_h->count();
		}
		arsort($top);
		//var_dump($top);
		//die();
		return Theme::back('index')->with('top', $top);
	}

	/**
	 * User
	 *
	 * @return void
	 */
	public function user()
	{
		$users = User::all();
		return Theme::back('user')->with('users', $users);
	} 

	public function user_create()
	{
		$validate = Validator::make(Input::all(), array(
			'username' 	=> 'required||unique:users',
			'name' 	=> 'required||min:3',
			'password' 		=> 'required||min:5',
			'password2' => 'same:password',
			'phone'=> 'required||min:3',
			'email'	=> 'required||min:3',
			'roles'	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'username' 	=> 'required||unique:users',
				'name' 	=> 'required||min:3',
				'password' 		=> 'required||min:5',
				'password2' => 'same:password',
				'phone'=> 'required||min:3',
				'email'	=> 'required||min:3',
				'roles'	=> 'required',
				'create' => 'required',
				));
			return redirect('user')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$user = new User();
			$user->username = Input::get('username');
			$user->name = Input::get('name');
			$user->password = Hash::make(Input::get('password'));
			$user->hp = Input::get('phone');
			$user->email = Input::get('email');
			$user->role = Input::get('roles');
			$user->save();
			return redirect('user');
		}
	}

	public function user_update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_name' 	=> 'required||min:3',
			'edit_password' 		=> 'required||min:5',
			'edit_phone'=> 'required||min:3',
			'edit_email'	=> 'required||min:3',
			'edit_roles'	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_name' 	=> 'required||min:3',
				'edit_password' 		=> 'required||min:5',
				'edit_phone'=> 'required||min:3',
				'edit_email'	=> 'required||min:3',
				'edit_roles'	=> 'required',
				'update' => 'required',
				));
			return redirect('user')->withErrors($validate)->withInput();
		}
		else{	
			$user = User::find(Input::get('edit_id'));
			$user->name = Input::get('edit_name');
			$user->password = Hash::make(Input::get('edit_password'));
			$user->hp = Input::get('edit_phone');
			$user->email = Input::get('edit_email');
			$user->role = Input::get('edit_roles');
			$user->save();
			return redirect('user');
		}
	}

	public function user_edit(){
		$user = User::find(Auth::user()->id);
		$validate = Validator::make(Input::all(), array(
			'name' 	=> 'required||min:3',
			'old_password' 		=> 'required',
			'password' 		=> 'required||min:5',
			'password2' => 'same:password',
			'phone'=> 'required||min:3',
			'email'	=> 'required||min:3',
			));

		if ($validate -> fails()){
			if (!Hash::check(Input::get('old_password'), $user->password)) {
				$validate = Validator::make(Input::all(), array(
					'name' 	=> 'required||min:3',
					'old_password' 		=> 'required',
					'password' 		=> 'required||min:5',
					'password2' => 'same:password',
					'phone'=> 'required||min:3',
					'email'	=> 'required||min:3',
					'wrong' => 'required',
				));
			}
			return redirect('editprofile')->withErrors($validate)->withInput();
		}
		else{
			$user->name = Input::get('name');
			$user->password = Hash::make(Input::get('password'));
			$user->hp = Input::get('phone');
			$user->email = Input::get('email');
			$user->save();
			$asd = "true";
			return Theme::back('user_edit')->with('asd', $asd);
		}
	}

	public function user_delete($id)
	{
		//die(Input::get('news'));
		$user = User::find($id);
		$user->delete();

		return redirect('user');
	}

	/**
	 * Product
	 *
	 * @return void
	 */
	public function product()
	{
		//die("lol");
		$query = new Product();
		if (Input::has('code')){
			$term = Input::get('code');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("itemcode regexp '".$term."'");
		}
		if (Input::has('price')){
			$term = Input::get('price');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("price regexp '".$term."'");
		}
		if (Input::has('itemname')){
			$term = Input::get('itemname');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("itemname regexp '".$term."'");
		}
		if (Input::has('description')){
			$term = Input::get('description');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("description regexp '".$term."'");
		}
		if (Input::has('model')){
			$term = Input::get('model');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("model regexp '".$term."'");
		}
		if (Input::has('spec')){
			$term = Input::get('spec');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("spec regexp '".$term."'");
		}
		if (Input::has('registrasi')){
			$term = Input::get('registrasi');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("registrasi regexp '".$term."'");
		}
		if (Input::has('kurs')){
			$term = Input::get('kurs');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("kurs regexp '".$term."'");
		}

		$products = $query->paginate(50);
		$products->setPath('');
		$pagination = $products->appends(array('code' => Input::get('code'),
			'description' => Input::get('description'),
			'itemname' => Input::get('itemname'),
			'model' => Input::get('model'),
			'spec' => Input::get('spec'),
			'registrasi' => Input::get('registrasi'),
			'kurs' => Input::get('kurs'),
			'price' => Input::get('price')));

		Session::put('progress', 0);
		Session::save();

		//$this->rrmdir(storage_path('temp'));
		if (file_exists(storage_path('temp')))
			$this->rrmdir(storage_path('temp'));

        //die(var_dump(Input::all()));
		return Theme::back('product')->with('products', $products)->with('pagination', $pagination)->with('terms', Input::all());
	}

	function rrmdir($dir) { 
		if (is_dir($dir)) { 
			$objects = scandir($dir); 
			foreach ($objects as $object) { 
				if ($object != "." && $object != "..") { 
					if (filetype($dir."/".$object) == "dir") $this->rrmdir($dir."/".$object); else unlink($dir."/".$object); 
				} 
			} 
			reset($objects); 
			rmdir($dir); 
		} 
	}

	public function import_new()
	{
		//echo("1. " . memory_get_usage()/1000000 . " MB <br>");
		$time1 = microtime(true);
		Session::put('progress', "Uploading...");
		Session::save();

		$date_now = Carbon::now();
		$now = $date_now->toDateTimeString();
		$now = str_replace(" ","_", $now);
		$now = str_replace(":","-", $now);

		$extension = Input::file('file')->getClientOriginalExtension();
		$fileName = $now.'.'.$extension;
		Input::file('file')->move(storage_path('excel/exports'), $fileName);
		//echo("2. " . memory_get_usage()/1000000 . " MB <br>");
		//unlink(storage_path('excel/exports/'). $fileName);
		Session::put('progress', "Processing...");
		Session::save();
		set_time_limit(0);
		//put shits HERE
		
		Product::truncate();
		Eloquent::unguard();
		DB::disableQueryLog();
		$workbook = SpreadsheetParser::open(storage_path('excel/exports/').$fileName);

		$myWorksheetIndex = $workbook->getWorksheetIndex('Sheet1');
		$users = [];
		$i = 0;
		foreach ($workbook->createRowIterator($myWorksheetIndex) as $rowIndex => $values) {
			if ($values[0] != "" && $values[0] != "ItemCode"){
				$users[] = [
				'itemcode' => $values[0],
				'description' => $values[1],
				'itemname' => $values[2],
				'model' => $values[3],
				'spec' => $values[4],
				'registrasi' => $values[5],
				'kurs' => $values[6],
				'price' => $values[7]
				];
			}
			if ($rowIndex % 5000 == 0){
				Product::insert($users);
				$users = [];
			}
			if ($rowIndex % 100 == 0){
				Session::put('progress', $i . ' data processed');
				Session::save();
			}
			$i++;
		}
		Product::insert($users);

		$upload = new Upload();
		$upload->name = $fileName;
		$upload->date = $date_now;
		$upload->save();

		$time2 = microtime(true);
		echo "sampai masukin ke db: ". round(($time2-$time1), 2). "<br>"; //value in seconds
		//die("memory sekarang " . memory_get_usage()/1000000 . " MB <br>");
		return redirect('product');
	}

	public function export()
	{
		$upload = Upload::orderBy('date', 'DESC')->first();
		$pathToFile = storage_path('excel/exports/').$upload->name;
		return response()->download($pathToFile);
	}

	/**
	 * News
	 *
	 * @return void
	 */
	public function news()
	{
		$news = News::orderBy('id', 'DESC')->paginate(5);
		$news->setPath('');
		return Theme::back('news')->with('news', $news);
	}

	public function news_create()
	{
		//die(Input::get('news'));
		$news = new News();
		$news->title = Input::get('title');
		$news->body = Input::get('body');
		$news->date = Carbon::now()->addHours(7);
		$news->save();

		return redirect('news');
	}

	public function news_edit()
	{
		//die(Input::get('id'));
		$news = News::find(Input::get('id'));
		$news->title = Input::get('title');
		$news->body = Input::get('body');
		$news->save();

		return redirect('news');
	}

	public function news_delete($id)
	{
		//die(Input::get('news'));
		$news = News::find($id);
		$news->delete();

		return redirect('news');
	}

}
