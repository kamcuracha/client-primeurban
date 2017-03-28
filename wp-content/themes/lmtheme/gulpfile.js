var elixir = require('laravel-elixir');

elixir((mix) => {
	mix
	.sass('main.scss', 'assets/styles/main.css', 'assets/scss')
	.scripts([
		'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
		'assets/scripts/plugins/singlePageNav.js',
		'assets/scripts/plugins/appear.js',
		'assets/scripts/main.js',
	], 'assets/scripts/all.js', './')
	.scripts([
		'assets/scripts/plugins/isotope.pkgd.min.js',
		'assets/scripts/project.js',
	], 'assets/scripts/all-project.js', './')
});