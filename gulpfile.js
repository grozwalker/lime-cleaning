var gulp = require('gulp'),
    sass = require('gulp-sass'), //Подключаем Sass пакет
    compass = require('gulp-compass'),
    sourcemaps = require('gulp-sourcemaps'),
    gp_concat = require('gulp-concat'),
    gp_uglify = require('gulp-uglify');
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
    BrowserSync.init();
    mix.BrowserSync();
});*/

gulp.task('compass', function() {
    gulp.src('public/assets/sass/**/*.sass')
        .pipe(compass({
            config_file: './config.rb',
            css: 'public/css',
            sass: 'public/assets/sass'
        }))
        .pipe(gulp.dest('public/css'))
});

gulp.task('js-min', function(){
    return gulp.src([
        'public/assets/js_source/common.js',
        'public/assets/js_source/form.js',
        'public/assets/js_source/buttons.js',
        'public/assets/js_source/internal-page.js',
        'public/assets/js_source/lists-desctop.js',
        'public/assets/js_source/lists-mobile.js'
    ])
        .pipe(gp_concat('scripts.js'))
        .pipe(gulp.dest('public/js'))
        .pipe(gp_uglify())
        .pipe(gulp.dest('public/js'));
});


gulp.task('watch', ['compass','js-min'], function() {
    gulp.watch('public/assets/sass/**/*.sass', ['compass']); // Наблюдение за sass файлами
    gulp.watch('public/js/js_source/*.js', ['js-min']); // Наблюдение за js файлами
});


gulp.task('build', ['compass','js-min'], function() {});

