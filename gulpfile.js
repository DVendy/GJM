var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

	//Combine all css
    mix.styles([
    	'css/bootstrap.min.css',
    	'css/icons.min.css',
    	'css/londinium-theme.min.css',
    	'css/styles.min.css'
    ], 'public/css/all.css', 'resources/assets');

    //Combine all script
    mix.scripts([
		'js/jquery.min.js',
		'js/jquery-ui.min.js',
		'js/plugins/charts/sparkline.min.js',
		'js/plugins/forms/uniform.min.js',
		'js/plugins/forms/select2.min.js',
		'js/plugins/forms/inputmask.js',
		'js/plugins/forms/autosize.js',
		'js/plugins/forms/inputlimit.min.js',
		'js/plugins/forms/listbox.js',
		'js/plugins/forms/multiselect.js',
		'js/plugins/forms/validate.min.js',
		'js/plugins/forms/tags.min.js',
		'js/plugins/forms/switch.min.js',
		'js/plugins/forms/uploader/plupload.full.min.js',
		'js/plugins/forms/uploader/plupload.queue.min.js',
		'js/plugins/forms/wysihtml5/wysihtml5.min.js',
		'js/plugins/forms/wysihtml5/toolbar.js',
		'js/plugins/interface/daterangepicker.js',
		'js/plugins/interface/fancybox.min.js',
		'js/plugins/interface/moment.js',
		'js/plugins/interface/jgrowl.min.js',
		'js/plugins/interface/datatables.min.js',
		'js/plugins/interface/colorpicker.js',
		'js/plugins/interface/fullcalendar.min.js',
		'js/plugins/interface/timepicker.min.js',
		'js/plugins/interface/collapsible.min.js',
		'js/bootstrap.min.js',
		'js/application.js',
	], 'public/js/all.js', 'resources/assets');
});