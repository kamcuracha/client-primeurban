var elixir = require('laravel-elixir');

elixir((mix) => {
	mix
	.sass('styles.scss', 'themes/admin/assets/css/styles.css', 'src/admin/sass')
	.sass('styles.scss', 'themes/frontend/assets/css/styles.css', 'src/sass')
	.scripts([

		'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
		'node_modules/bootbox/bootbox.min.js',
		'src/admin/js/plugins/jquery.treeview.js',

		'src/admin/js/main.js',
	], 'themes/admin/assets/js/all.js', './')


	/// Frontend Scripts

	.scripts([
		'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
		'node_modules/jquery-colorbox/jquery.colorbox.js',
		'node_modules/select2/dist/js/select2.js',
		'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js',
		'src/js/plugins/uisearch.js',
		'src/js/plugins/slick.min.js',
	], 'themes/frontend/assets/js/all.js', './')
});
