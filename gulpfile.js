//var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*elixir(function(mix) {
    mix.sass('app.scss');
});*/

var gulp = require('gulp');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var autoprefix = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var uglify = require('gulp-uglify');
var php = require('gulp-connect-php');
var clean = require('gulp-clean');
var imageResize = require('gulp-image-resize');
var sass = require('gulp-sass');;
var imagemin = require("gulp-imagemin");
var concat = require('gulp-concat');

gulp.task('css', function() {
    return gulp.src('./resources/assets/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cssnano())
        .pipe(autoprefix('> 1%')) 
        .pipe(rename({suffix:'.min'}))
        .pipe(gulp.dest('./public/css/'))
        .pipe(browserSync.stream());
});

gulp.task('js', function() {
    return gulp.src('./resources/assets/js/*.js')
        .pipe(uglify())
        .pipe(rename({suffix:'.min'}))
        .pipe(gulp.dest('./public/js/'))
        .pipe(browserSync.stream());
})

gulp.task('browserSync', function() {
    browserSync.init({
        // https: true,
        proxy: 'http://laravel-manu-wildman2bad.c9users.io/',
        port: 8082,
    });
});

gulp.task('imagemin', function() {
   	return gulp.src('./public/images/*')
		.pipe(imagemin())
		.pipe(gulp.dest('./public/dist/images')) 
});




gulp.task('resizeImage', function() {
    return gulp.src('./public/images/*{png,jpg,jpeg}')
      .pipe(imageResize({width: 3000}))
      .pipe(rename({prefix:'3000-'}))
      .pipe(imagemin())
      .pipe(gulp.dest('./public/dist/images'))
});




gulp.task('default', ['css', 'js', 'browserSync'], function() {
	gulp.watch('./resources/assets/sass/*.scss', function() {
	    gulp.run('css');
	});
	gulp.watch('./resources/assets/js/*.js', function() {
	    gulp.run('js');
	});
	gulp.watch('./resources/views/*.php').on('change', browserSync.reload);
});