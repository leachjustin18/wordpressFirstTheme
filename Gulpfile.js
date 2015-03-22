/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var gulp = require('gulp');
var sass = require('gulp-sass');

var paths = {
  sass: 'assets/sass/*.scss', 
  css: 'assets/css'
};
 
gulp.task('sass', function () {
    gulp.src(paths.sass)
        .pipe(sass())
        .pipe(gulp.dest('assets/css'));
});


// Rerun the task when a file changes
gulp.task('watch', function() {
  gulp.watch(paths.sass, ['sass']);;
});


// The default task (called when you run `gulp` from cli)
gulp.task('default', ['sass']);

// The default task (called when you run `gulp watchSass` from cli)
gulp.task('watchSass', ['sass', 'watch']);

