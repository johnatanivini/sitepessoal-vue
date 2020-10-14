
var gulp = require('gulp');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');


gulp.task('css', function() {
    // place code for your default task here
       gulp.src([
           'css/default.css',
           'css/layout.css',
           'css/media-queries.css',
           'css/magnific-popup.css',
           'css/alteracoes.css'
       ])
       .pipe(minifyCSS())
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
        .pipe(concat('style.min.css'))
        .pipe(gulp.dest('css'));
});


gulp.task('js', function() {
    gulp.src([ 'js/jquery-1.10.2.min.js',
        'js/jquery-migrate-1.2.1.min.js',
        'js/jquery.flexslider.js',
        'js/waypoints.js',
        'js/jquery.fittext.js',
        'js/magnific-popup.js',
        'js/mansonry.js',
        'node_modules/jquery-validation/dist/jquery.validate.js',
        'node_modules/jquery-validation/dist/additional-methods.js',
        'node_modules/jquery-validation/dist/localization/messages_pt_BR.js',
        'js/init.js'])
        .pipe(uglify())
        .pipe(concat('js.min.js'))
        .pipe(gulp.dest('js'));
});