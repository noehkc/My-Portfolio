//complile sass files
//combine and concat javascript
//minify javascript
//watch

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');

gulp.task('sass', function(){
    return gulp.src('scss/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./'))
});

gulp.task('scripts', function(){
   return gulp.src('js/scripts/*.js')
    .pipe(concat('all.js'))
    .pipe(uglify())
   .pipe(gulp.dest('js'))
});

gulp.task('watch', function(){
    gulp.watch('js/scripts/*.js',['scripts']);
    gulp.watch('scss/*.scss',['sass']);
});