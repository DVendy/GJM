<?php 
namespace App\Kreasys;

use Config;
use View;
use HTML;
use Session;
use URL;

class Helper {

	public function __construct() 
	{

	}


	public function throwMessage($session, $messages, $type)
	{
		$title = 'Success!';

		if($type=='danger')
			$title = 'Sorry..';

		if(empty($messages))
			$messages = Session::get($session);

		if(!empty($messages)){
			$html = '<div class="callout callout-'.$type.' fade in landing">'.
					    '<button type="button" class="close" data-dismiss="alert">×</button>'.
					    '<h5>'.$title.'</h5>';
      

			if(is_object($messages)){
				foreach ($messages->all(
					'<p>:message</p>'
				) as $message):
					$html = $html.$message;
				endforeach;
				return $html.'</div>';
			}
			if(is_array($messages)){
				foreach ($messages as $message):
					$html = $html.'<p>'.$message.'</p>';
				endforeach;
				return $html.'</div>';
			} 

			return	'<div class="callout callout-'.$type.' fade in landing">'.
					    '<button type="button" class="close" data-dismiss="alert">×</button>'.
					    '<h5>'.$title.'</h5>'.
					    '<p>'.$messages.'</p>'.
          			'</div>';
		}

	}


	public function throwMessageX($session, $messages, $type)
	{

		$title = 'Success!';

		if($type=='alert')
			$title = 'Sorry..!';

		if(empty($messages))
			$messages = Session::get($session);

		if(!empty($messages)){
			$html = '<div data-alert class="alert-box '.$type.'">'.
					    '<b>'.$title.'</b><br>';
      

			if(is_object($messages)){
				foreach ($messages->all(
					':message<br>'
				) as $message):
					$html = $html.$message;
				endforeach;
				return $html.'<a href="#" class="close">&times;</a></div>';
			}
			if(is_array($messages)){
				foreach ($messages as $message):
					$html = $html.$message.'<br>';
				endforeach;
				return $html.'<a href="#" class="close">&times;</a></div>';
			} 

			return	'<div data-alert class="alert-box '.$type.'">'.
					    '<b>'.$title.'</b><br>'.
					    $messages.'<br>'.
          			'<a href="#" class="close">&times;</a></div>';
		}

	}

	public function img($photo, $path = null, $size = null){
		if(!empty($path)){
			if(!empty($size))
				return URL::asset('').'images/'.$path.'/'.$size.'/'.$photo;
			else
				return URL::asset('').'images/'.$path.'/'.$photo;
		}

		return URL::asset('assets/images/'.$photo);
	}	

}