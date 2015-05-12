<?php 
namespace App\Kreasys;

use Config;
use View;
use HTML;

class Theme {

	protected $theme;
	protected $part;
	protected $styles;
	protected $headerScripts;
	protected $footerScripts;

	public function __construct() 
	{
		$this->theme = Config::get('theme.default');
	}

	public function front($template){
		$this->part = 'front';
		return $this->draw($template);
	}

	public function back($template){
		$this->part = 'back';
		return $this->draw($template);
	}

	public function draw($template){
		$this->styles = Config::get('theme.'.$this->theme.'.'.$this->part.'.style');
		$this->headerScripts = Config::get('theme.'.$this->theme.'.'.$this->part.'.script.header');
		$this->footerScripts = Config::get('theme.'.$this->theme.'.'.$this->part.'.script.footer');	

		return View::make($this->theme.'.'.$this->part.'.'.$template);		
	}

	public function getStyle()
	{
		foreach ($this->styles as $key => $val) {
			echo HTML::style($key, $val)."\n";
		}
	}

	public function getHeaderScript()
	{
		foreach ($this->headerScripts as $key => $val) {
			echo HTML::script($key, $val)."\n";
		}
	}

	public function getFooterScript()
	{
		foreach ($this->footerScripts as $key => $val) {
			echo HTML::script($key, $val)."\n";
		}
	}

}