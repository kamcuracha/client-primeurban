var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'), 
    // livereload = require('gulp-livereload'), // not working
    imagemin = require('gulp-imagemin'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'); 
    // plumber = require('gulp-plumber');

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