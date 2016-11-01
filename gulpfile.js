'use strict';

/**
 * Required modules
 */
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var duration = require('gulp-duration')
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var filter = require('gulp-filter');
var gutil = require('gulp-util');
var sourcemaps = require('gulp-sourcemaps');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var watchify = require('watchify');
var browserify = require('browserify');
var uglify = require('gulp-uglify');
var babelify = require('babelify');
var exec = require('child_process').exec;

var argv = require('yargs').argv;
var gulpif = require('gulp-if');

var rev = require('gulp-rev');
var fs = require('fs');

var production = !!(argv.production); // true if --production flag is used


/**
 * App paths
 */
var app = 'web/app/themes/vghubc/';

var jsBundlePath = app + 'assets/js/rev-manifest.json';
var cssBundlePath = app + 'assets/css/rev-manifest.json';


/**
 * Cache busting for JS and CSS
 * - Revision Manifest file deletion on `gulp build --production`
 * - reads existing manifest file to find old prod build to delete
 */
var jsManifest = '';
var cssManifest = '';

if (production) {
  if (fs.existsSync(jsBundlePath)) {
    var jsManifest = fs.readFileSync(jsBundlePath);
    jsManifest = app + 'assets/js/' + JSON.parse(jsManifest)['bundle.js'];
  }

  if (fs.existsSync(cssBundlePath)) {
    var cssManifest = fs.readFileSync(cssBundlePath);
    cssManifest = app + 'assets/css/' + JSON.parse(cssManifest)['styles.css'];
  }
}


/**
 * Watch task
 */
gulp.task( 'dev', ['js'], function(){
		browserSync({
				proxy: "vghubc.dev",
				ghostMode: false,
				open: false
		});

		gulp.watch([app + 'assets/scss/{,**/}*.{scss,sass}'], ['sass']);
		gulp.watch(app + '/**/*.php').on('change', reload);
		gulp.watch(app + '/**/*.inc').on('change', reload);
//		gulp.watch(app + '/assets/js/*.js').on('change', reload);

});


/**
 * SASS compile
 */
gulp.task( 'sass', function(){
    gulp.src(app + 'assets/scss/styles.scss')
      .pipe(gulpif(!production, sourcemaps.init()))
        .pipe(sass())
        .on('error', gutil.log.bind(gutil, 'Sass Error'))
        .pipe(autoprefixer())
        .pipe(gulpif(production, csso()))
        .pipe(duration('Compiled CSS'))
      .pipe(gulpif(!production, sourcemaps.write()))
      .pipe(gulpif(production, rev()))
      .pipe(gulp.dest(app + 'assets/css'))
      .pipe(filter('**/*.css')) // Filtering stream to only css files
      .pipe(gulpif(!production, reload({stream: true})))
      .pipe(gulpif(production, rev.manifest('rev-manifest.json')))
      .pipe(gulpif(production, gulp.dest(app + 'assets/css')))

});


/**
 * JS browserify compile with Babel (ES6 transform)
 */
var bundler = production ? browserify(watchify.args) : watchify(browserify(watchify.args));

// add the file to bundle
bundler.add('./' + app + 'assets/js/app.js');
gulp.task('js', bundle); // so you can run `gulp js` to build the file
bundler.on('update', bundle); // on any dep update, runs the bundler
bundler.on('log', gutil.log); // output build logs to terminal
bundler.transform(babelify).require('./'+ app + 'assets/js/app.js', { entry: true });; // es6 support

function bundle() {
  return bundler.bundle()
    // log errors if they happen
    .on('error', gutil.log.bind(gutil, 'Browserify Error'))
    .pipe(source('bundle.js'))
    .pipe(gulpif(production, buffer()))
    .pipe(gulpif(production, uglify()))
    .pipe(gulpif(production, rev()))
    .pipe(gulp.dest('./'+ app + 'assets/js'))
    .pipe(gulpif(!production, reload({stream: true})))
    .pipe(gulpif(production, rev.manifest('rev-manifest.json')))
    .pipe(gulpif(production, gulp.dest('./'+ app + 'assets/js')));
}


/**
 * Clean task - delete dist folder
 */
gulp.task('clean', require('del').bind(null, [jsManifest, cssManifest]));


/**
 * Default task
 */
gulp.task('default', ['dev']);


/**
 * Build task
 */
gulp.task('build', ['clean', 'js','sass']);


/**
 * RSYNC uploads to staging server
 */
// gulp.task('rsyncstage', function (cb) {
//   exec('rsync -Pubvaz --stats web/app/uploads/ signals_vps@ps405853.dreamhostps.com:sphf.signalsinteractive.com/web/app/uploads/', function (err, stdout, stderr) {
//     console.log(stdout);
//     console.log(stderr);
//     cb(err);
//   });
// })
