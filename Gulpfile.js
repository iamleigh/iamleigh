'use strict';

// Project paths
var paths = {
    src: 'assets/sass/',
    dist: 'assets/css/',
    srcJS: 'assets/js/'
};

// Load packages
var gulp            = require( 'gulp' ),
    watch           = require( 'gulp-watch' ),
    sass            = require( 'gulp-sass' ),
    sourcemaps      = require( 'gulp-sourcemaps' ),
    autoprefixer    = require( 'gulp-autoprefixer' ),
    notify          = require( 'gulp-notify' ),
    concat          = require( 'gulp-concat' ),
    uglify          = require( 'gulp-uglify' ),
    wpPot           = require( 'gulp-wp-pot' );

// TASK styles
gulp.task( 'theme-styles', function() {

    gulp.src( paths.src + '**/**/**/**/*.scss' )
        .pipe( sourcemaps.init() )
        .pipe( sass( {outputStyle: 'compressed'} ) ).on( 'error', function(err) {notify().write(err);} )
        .pipe( autoprefixer('last 2 version', '> 1%', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4') )
        .pipe( sourcemaps.write("maps") )
        .pipe( gulp.dest( paths.dist ) )
        .pipe( notify({message: 'Theme styles are ready.', onLast: true}) );
    
} );

// TASK scripts
var adminJsFiles = [
    'assets/js/front/modal.js',
    'assets/js/front/select2.js'
];

gulp.task( 'theme-scripts', function() {

    return gulp.src( adminJsFiles )
        .pipe( sourcemaps.init() )
        .pipe( concat('iamui-js.min.js') )
        .pipe( uglify() )
        .pipe( sourcemaps.write("maps") )
        .pipe( gulp.dest(paths.srcJS) )
        .pipe( notify({message: 'Theme scripts are ready.', onLast: true}) );

} );

// TASK translate
gulp.task( 'translate', function () {
    
    return gulp.src( './**/*.php' )
        .pipe( wpPot( {
            domain          : 'iamleigh',
            destFile        : 'language/iamleigh.pot',
            package         : 'iamleigh',
            bugReport       : 'http://iamleigh.com',
            lastTranslator  : 'Leighton Sapir <leighton@iamleigh.com>',
            team            : 'Leighton Sapir <leighton@iamleigh.com>'
        } ) )
        .pipe( gulp.dest( 'language/iamleigh-en_US.po' ) )
        .pipe( notify( { message: 'Theme translation is ready.', onLast: true } ) );

} );

// TASK watch
gulp.task( 'watch-css', function() {
    gulp.watch( paths.src + '**/**/**/**/*.scss', ['theme-styles'] );
} );

gulp.task( 'watch-js', ['theme-scripts'], function() {
    gulp.watch( paths.srcJS + 'front/**/*.js', ['theme-scripts'] );
} );

// Register tasks to 'gulp' command
gulp.task( 'default', ['theme-styles', 'watch-css', 'theme-scripts', 'watch-js'] );