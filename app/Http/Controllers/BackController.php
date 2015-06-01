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
use View;

use Akeneo\Component\SpreadsheetParser\SpreadsheetParser;
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
use Box\Spout\Writer\WriterFactory;

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
			$user->md5 = md5(Input::get('password'));
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
			$user->md5 = md5(Input::get('edit_password'));
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
			$user->md5 = md5(Input::get('password'));
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
		if (Input::has('name')){
			$term = Input::get('name');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("name regexp '".$term."'");
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
		if (Input::has('merek')){
			$term = Input::get('merek');
			$term = trim($term);
			$term = str_replace(" ", "|", $term);
			$query = $query->whereRaw("merek regexp '".$term."'");
		}

		$jumlah = $query->count();
		//die(var_dump($jumlah));

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

		//$this->rrmdir(storage_path('temp'));
		if (file_exists(storage_path('temp')))
			$this->rrmdir(storage_path('temp'));

        //die(var_dump(Input::all()));
		return Theme::back('product')->with('products', $products)->with('pagination', $pagination)->with('terms', Input::all())->with('jumlah', $jumlah);
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

	public function import_spout(){
		$reader = ReaderFactory::create(Type::XLSX);
		$reader->open(storage_path()."\data.xlsx");

		while ($reader->hasNextSheet()) {
		    $reader->nextSheet();

		    while ($reader->hasNextRow()) {
		        $row = $reader->nextRow();
		        // do stuff
		    }
		}

		$reader->close();
	}

	public function export_spout(){		
		set_time_limit(0);
		$product = Product::all();

		$writer = WriterFactory::create(Type::XLSX);

		$writer->openToBrowser("Data.xlsx"); // stream data directly to the browser
		$writer->addRow(array('ItemCode', 'ItemName', 'Name', 'Merek', 'Model', 'Spec', 'Registrasi', 'Kurs', 'Price'));
		foreach ($product as $key => $value) {
			$writer->addRow(array(
				$value->itemcode,
				$value->itemname,
				$value->name,
				$value->merek,
				$value->model,
				$value->spec,
				$value->registrasi,
				$value->kurs,
				$value->price
				));
		}

		$writer->close();
	}

	function isSame($p, $v){
		if ($p->itemname != $v[1]){
				//echo $p->itemname;
					return false;}
		if ($p->name != $v[2]){
				//echo $p->description;
					return false;}
		if ($p->merek != $v[3]){
				//echo $p->description;
					return false;}
		if ($p->model != $v[4]){
				//echo $p->model;
					return false;}
		if ($p->spec != $v[5]){
				//echo $p->spec;
					return false;}
		if ($p->registrasi != $v[6]){
				//echo $p->registrasi;
					return false;}
		if ($p->kurs != $v[7]){
				//echo $p->kurs;
					return false;}
		if ($p->price != $v[8]){
				//echo $p->price;
					return false;}

		return true;
	}

	function toNull($v){
		foreach ($v as $key => $value) {
			if ($value == "NULL")
				$v[$key] = null;
		}
		return $v;
	}

	public function import_new()
	{
		$validate = Validator::make(Input::all(), array(
			'file' 	=> 'required||mimes:xlsx',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'file' 	=> 'required||mimes:xlsx',
				'error' => 'required',
				));
			return redirect('product')->withErrors($validate)->withInput();
		}

		echo("1. " . memory_get_usage()/1000000 . " MB <br>");
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
		echo("2. " . memory_get_usage()/1000000 . " MB <br>");
		//unlink(storage_path('excel/exports/'). $fileName);
		Session::put('progress', "Processing...");
		Session::save();
		set_time_limit(0);
		//put shits HERE
		
		//Product::truncate();
		Eloquent::unguard();
		DB::disableQueryLog();
		$workbook = SpreadsheetParser::open(storage_path('excel/exports/').$fileName);

		$myWorksheetIndex = $workbook->getWorksheetIndex('Sheet1');
		$users = [];
		$i = 0;
		foreach ($workbook->createRowIterator($myWorksheetIndex) as $rowIndex => $values) {
			// $values = $this->toNull($values);
			// echo(var_dump($values));
			if ($values[0] != "" && $values[0] != "ItemCode"){
				$p = Product::where('itemcode', '=', $values[0])->first();
				if($p != null){
					if (!$this->isSame($p, $values)){
					//die("sama");
						$p->itemname = $values[1];
						$p->name = $values[2];
						$p->merek = $values[3];
						$p->model = $values[4];
						$p->spec = $values[5];
						$p->registrasi = $values[6];
						$p->kurs = $values[7];
						$p->price = $values[8];
						$p->lastupdate = $date_now;
						$p->save();
					}
				}else{

					$users[] = [
					'itemcode' => $values[0],
					'itemname' => $values[1],
					'name' => $values[2],
					'merek' => $values[3],
					'model' => $values[4],
					'spec' => $values[5],
					'registrasi' => $values[6],
					'kurs' => $values[7],
					'price' => $values[8],
					'lastupdate' => $date_now,
					];

				}

				if ($rowIndex % 5000 == 0){
					Product::insert($users);
					$users = [];
				}
				if ($rowIndex % 123 == 0){
					Session::put('progress', $i . ' data processed');
					Session::save();
				}
				$i++;
			}
		}
		Product::insert($users);
		Session::put('progress', 'Finishing.');
		Session::save();

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

	public function product_empty(){
		Product::truncate();
		$asd = "true";
		return $this->product()->with('asd', $asd);	
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
		$validate = Validator::make(Input::all(), array(
			'title' 	=> 'required',
			'body' 	=> 'required',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'title' 	=> 'required',
				'body' 	=> 'required',
				'error' => 'required',
				));
			return redirect('news')->withErrors($validate)->withInput();
		}

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
