/*  INSTALL:
        npm i gulp browser-sync gulp-sass gulp-autoprefixer gulp-html-beautify gulp-clean-css gulp-htmlmin gulp-uglify gulp-eslint eslint-config-jquery --save-dev
        npm i gulp -g //if you want to run gulp globally
    USE:
        DEBUG:
            gulp
        BUILD:
            gulp build    
*/

var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var htmlbeautify = require('gulp-html-beautify');
var cleanCSS = require('gulp-clean-css');
var htmlmin = require('gulp-htmlmin');
var minifyJS = require('gulp-uglify');
var eslint = require('gulp-eslint');
 
//Beautify HTML
gulp.task('htmlbeautify', function() {
  var options = {
    indentSize: 2
  };
  gulp.src('./src/*.html')
    .pipe(htmlbeautify(options))
    .pipe(gulp.dest('./src/')) 
});

// gulp.task('lint', function() {
//     // ESLint ignores files with "node_modules" paths.
//     // So, it's best to have gulp ignore the directory as well.
//     // Also, Be sure to return the stream from the task;
//     // Otherwise, the task may end before the stream has finished.
//     return gulp.src(['src/js/*.js'])
//         // eslint() attaches the lint output to the "eslint" property
//         // of the file object so it can be used by other modules.
//         .pipe(eslint({
//             configFile: '.eslintrc.js',
//             "globals": [
//                 "jQuery",
//                 "$",
//                 "moment"
//             ],
//             fix: true
//         }))
//         // eslint.format() outputs the lint results to the console.
//         // Alternatively use eslint.formatEach() (see Docs).
//         .pipe(eslint.format())
//         // To have the process exit with an error code (1) on
//         // lint error, return the stream and pipe to failAfterError last.
//         .pipe(eslint.failAfterError())
//         .pipe(browserSync.stream());
// });

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        server: ['./', './src']
    });

    gulp.watch(["./src/sass/*.scss", "./src/sass/*/*.scss", "./src/sass/sections/*.scss", "node_modules/bootstrap/scss/bootstrap.scss"], ['sass']);
    gulp.watch(['src/js/*.js'], ['js', ]);
    gulp.watch(["./src/*.html"], ['htmlbeautify']).on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src(["./src/sass/*.scss", "./src/sass/*/*.scss", "./src/sass/sections/*.scss", "node_modules/bootstrap/scss/bootstrap.scss"])
        .pipe(sass())
         .pipe(autoprefixer({
             browsers: ['last 2 versions'],
             cascade: false
         }))
        .pipe(gulp.dest("src/css"))
        .pipe(browserSync.stream());
});

gulp.task('css', function(){
    return gulp.src(['src/lib/slick/slick.css', 'src/lib/chosen/chosen.css', 'src/lib/politeMask/polite.css'])
    .pipe(gulp.dest("src/css"));
});

gulp.task('lib-build', function(){
    return gulp.src(['src/lib/*'])
    .pipe(gulp.dest('dist/lib'));
});

gulp.task('css-build', function(){
    return gulp.src(['src/css/*.css'])
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('dist/css'));
});

gulp.task('html-build', function() {
  var options = {
    indentSize: 2
  };
  gulp.src('./src/*.html')
    .pipe(htmlbeautify(options))
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('./dist/'))
});

gulp.task('js-build', function() {
    return gulp.src(['./src/js/*.js'])
        .pipe(minifyJS())
        .pipe(gulp.dest("./dist/js"));
});

gulp.task('img-build', function(){
    return gulp.src(['./src/img/*', './src/img/*/*'])
    .pipe(gulp.dest('./dist/img'));
});

gulp.task('font-build', function(){
    return gulp.src(['./src/fonts/*', './src/fonts/*/*'])
    .pipe(gulp.dest('./dist/fonts'));
})

gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/tether/dist/js/tether.min.js', 'src/js/*.js', 'src/lib/mask.js', 'src/lib/slick/slick.min.js', 'src/lib/chosen/chosen.jquery.min.js', 'src/lib/politeMask/polite.js', 'src/lib/politeMask/polite_init.js'])
        .pipe(gulp.dest("src/js"))
        .pipe(browserSync.stream());
});

gulp.task('build', ['html-build', 'css-build', 'js-build', 'img-build', 'font-build', 'lib-build']);

gulp.task('default', ['htmlbeautify','css','js','serve']);