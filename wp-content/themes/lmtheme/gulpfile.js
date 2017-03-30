var elixir = require('laravel-elixir'),
    gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'), 
    // livereload = require('gulp-livereload'), // not working
    imagemin = require('gulp-imagemin'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'); 
    // plumber = require('gulp-plumber');

elixir((mix) => {
	mix
	.scripts([
		'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
		'assets/scripts/plugins/singlePageNav.js',
		'assets/scripts/plugins/appear.js',
		'assets/scripts/plugins/dotimeout.js',
		'assets/scripts/main.js',
	], 'assets/scripts/all.js', './')
	.scripts([
		'assets/scripts/plugins/isotope.pkgd.min.js',
		'assets/scripts/project.js',
	], 'assets/scripts/all-project.js', './')
});

// Styles Task
gulp.task('styles', function() {
    return gulp.src('./assets/scss/**/*.scss')
        // .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .on('error', sass.logError)
        .pipe(autoprefixer({
            // browsers: ['last 2 versions'],
            cascade: true
        }))
        .pipe(concat('main.css'))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./assets/styles/'))
        // .pipe(livereload())
    ;
});

// Image Task
gulp.task('image', function() {
    return gulp.src('./assets/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./assets/images'))
    ;
});

// Watch Task
gulp.task('watch', function() {
    // var server = livereload();

    gulp.watch('./assets/scss/**/*.scss', ['styles']);
});

gulp.task('default', ['styles', 'watch']);