<?php
	
return array(

	// Default theme used
	'default' => 'base',

	// Base theme used
	'base' => array(

		//Frontend assets
		'front' => array(

			//Style assets .css & others
			'style'	=> array(
				'css/all.css' => array('media' => 'all', 'type' => 'text/css', 'rel' => 'stylesheet'),
			),

			//Frontend Script
			'script' => array(

				//Script that placed on the header
				'header' => array(
					
				),

				//Script that placed on the footer
				'footer' => array(
					//'js/app.js' => array('type' => 'text/javascript'),	
					//'js/jquery.min.js' => array('type' => 'text/javascript'),	
					//'js/tinymce/tinymce.min.js' => array('type' => 'text/javascript'),				
				),
			),
		),
		'back' => array(
			'style'	=> array(
				'css/all.css' => array('media' => 'all', 'type' => 'text/css', 'rel' => 'stylesheet'),
			),
			'script' => array(
				'header' => array(

				),
				'footer' => array(
					'js/all.js' => array('type' => 'text/javascript'),		
				),
			),
		),
	),	


);