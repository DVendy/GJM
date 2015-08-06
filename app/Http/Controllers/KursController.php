<?php namespace App\Http\Controllers;

use Theme;
use App\Kurs;
use Validator;
use Input;

class KursController extends Controller {

	public function __construct()
	{
		$this->middleware('admin');
	}

	public function index(){
		$kurs = Kurs::all();
		return Theme::back('kurs')->with('kurs', $kurs);
	}

	public function kurs_create()
	{
		$validate = Validator::make(Input::all(), array(
			'code' 	=> 'required',
			'name' 	=> 'required||min:3',
			'value' 		=> 'required||numeric',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'code' 	=> 'required',
				'name' 	=> 'required||min:3',
				'value' 		=> 'required||numeric',
				'create' => 'required',	
				));
			return redirect('kurs')->withErrors($validate)->withInput();
		}
		else{		
	    //
			$kurs = new Kurs();
			$kurs->code = Input::get('code');
			$kurs->name = Input::get('name');
			$kurs->index = Input::get('value');
			$kurs->save();
			return redirect('kurs');
		}
	}

	public function kurs_update()
	{
		$validate = Validator::make(Input::all(), array(
			'edit_code' 	=> 'required',
			'edit_name' 	=> 'required||min:3',
			'edit_value' => 'required||numeric',
			));

		if ($validate -> fails()){
			$validate = Validator::make(Input::all(), array(
				'edit_code' 	=> 'required',
				'edit_name' 	=> 'required||min:3',
				'edit_value' => 'required||numeric',
				'update' => 'required',
				));
			return redirect('kurs')->withErrors($validate)->withInput();
		}
		else{	
			$user = Kurs::find(Input::get('edit_id'));
			$user->code = Input::get('edit_code');
			$user->name = Input::get('edit_name');
			$user->index = Input::get('edit_value');
			$user->save();
			return redirect('kurs');
		}
	}

	public function kurs_update_mass()
	{
		$edit_mass_id = Input::get('edit_mass_id');
		$edit_mass_value = Input::get('edit_mass_value');

		for ($x = 0; $x < count($edit_mass_id); $x++) {
			$k = Kurs::find($edit_mass_id[$x]);
			$k->index = str_replace(",","", $edit_mass_value[$x]);
			$k->save();
		}
		return redirect('kurs');
	}

	public function kurs_delete($id)
	{
		//die(Input::get('news'));
		$kurs = Kurs::find($id);
		$kurs->delete();

		return redirect('kurs');
	}

}