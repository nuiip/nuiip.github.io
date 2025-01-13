const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

gulp.task('scss', function () {
  return gulp.src('web/scss/**/*.scss') // Path to your SCSS files
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('web/css')); // Compiled CSS output path
});

// Watch for changes in SCSS files
gulp.task('watch', function() {
  gulp.watch('web/scss/**/*.scss', gulp.series('scss'));
});