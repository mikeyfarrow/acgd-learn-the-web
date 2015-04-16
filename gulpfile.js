var
  gulp = require('gulp'),
  autoprefixer = require('gulp-autoprefixer'),
  cssnext = require('gulp-cssnext'),
  rename = require('gulp-rename'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify')
;

gulp.task('css-main', function () {
  return gulp.src('css/main.css')
    .pipe(cssnext({ compress: true }))
    .pipe(autoprefixer({ cascade: false, browsers: 'last 2 versions' }))
    .pipe(gulp.dest('tmp'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./'))
  ;
});

gulp.task('css-home', function () {
  return gulp.src('css/main-home.css')
    .pipe(cssnext({ compress: true }))
    .pipe(autoprefixer({ cascade: false, browsers: 'last 2 versions' }))
    .pipe(gulp.dest('tmp'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./'))
  ;
});

gulp.task('css-topics', function () {
  return gulp.src('css/main-topics.css')
    .pipe(cssnext({ compress: true }))
    .pipe(autoprefixer({ cascade: false, browsers: 'last 2 versions' }))
    .pipe(gulp.dest('tmp'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./'))
  ;
});

gulp.task('css-article', function () {
  return gulp.src('css/main-article.css')
    .pipe(cssnext({ compress: true }))
    .pipe(autoprefixer({ cascade: false, browsers: 'last 2 versions' }))
    .pipe(gulp.dest('tmp'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./'))
  ;
});

gulp.task('js', function () {
  return gulp.src(['js/prism.js', 'js/main.js', 'js/article-nav.js', 'js/section-links.js', 'js/video.js'])
    .pipe(concat('main.min.js'))
    // .pipe(uglify())
    .pipe(gulp.dest('./'))
  ;
});

gulp.task('default', ['css-main', 'css-home', 'css-topics', 'css-article', 'js']);

gulp.task('watch', function() {
  gulp.watch('css/*.css', ['css-main', 'css-home', 'css-topics', 'css-article']);
  gulp.watch('js/*.js', ['js']);
});
