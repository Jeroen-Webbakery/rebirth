//==================================
// Required
//==================================
var gulp         = require('gulp'),
    concat       = require('gulp-concat'),
    uglify       = require('gulp-uglify'),
    browserSync  = require('browser-sync'),
    reload       = browserSync.reload,
    plumber      = require('gulp-plumber'),
    autoprefixer = require('gulp-autoprefixer'),
    rename       = require('gulp-rename'),
    sass         = require('gulp-sass'),
    sourcemaps   = require('gulp-sourcemaps');


//==================================
// Scripts Tasks
//==================================
// gulp.task('scripts', function(){
// 	gulp.src([
// 		'node_modules/bootstrap/js/src/collapse.js',
// 		'assets/js/**/*.js', '!assets/js/**/*.min.js'])
// 		.pipe(plumber())
// 		.pipe(rename({suffix:'.min'}))
// 		.pipe(uglify())
// 		.pipe(gulp.dest('assets/js'))
// 		.pipe(reload({stream:true}));
// });

gulp.task('scripts', gulp.series(function (done) {
    gulp.src([
        'node_modules/popper.js/dist/umd/popper.js',// Really needed?
        'node_modules/bootstrap/js/dist/util.js',
        'node_modules/bootstrap/js/dist/collapse.js',
        'node_modules/bootstrap/js/dist/tab.js',
        'node_modules/bootstrap/js/dist/dropdown.js',
        'node_modules/bootstrap/js/dist/modal.js',
        'assets/js/**/*.js',
        '!assets/js/**/*.min.js'
    ])
        .pipe(concat('luijten.js'))
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(rename({suffix: '.min'}))
        //.pipe(js({outputStyle: 'compressed'}).on('error', sass.logError))
        //.pipe(autoprefixer('last 2 versions'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/'))
        .pipe(reload({stream: true}));



    done();
}));

//==================================
// Sass Task
//==================================
gulp.task('sass', gulp.series(function (done) {
    gulp.src('assets/sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass({outputStyle: 'expand'}).on('error', sass.logError))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('assets/css/'))
        .pipe(reload({stream: true}));

    done();
}));

gulp.task('sass-minify', gulp.series(function (done) {
    gulp.src('assets/sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('assets/css/'))
        .pipe(reload({stream: true}));

    done();
}));

//==================================
// HTML Task
//==================================
gulp.task('html', gulp.series(function (done) {
    gulp.src('**/*.html')
        .pipe(reload({stream: true}));

    done();
}));

//==================================
// PHP Task
//==================================
gulp.task('php', gulp.series(function (done) {
    gulp.src('**/*.php')
        .pipe(reload({stream: true}));

    done();
}));

//==================================
// Browser-Sync Task
//==================================
gulp.task('browser-sync', gulp.series(function (done) {
    browserSync({
        browser: ["google chrome"],
        proxy:   "https://localhost/riv/"
    });

    done();
}));


//==================================
// Watch Task
//==================================
gulp.task('watch', gulp.series(function (done) {
    gulp.watch(['assets/js/**/*.js', '!assets/js/**/*.min.js'], gulp.series('scripts'));
    gulp.watch('assets/sass/**/*.scss', gulp.series('sass'));
    gulp.watch('**/*.html', gulp.series('html'));
    gulp.watch('**/*.php', gulp.series('php'));
}));

//==================================
// Default Tasks
//==================================
// gulp.task('default', ['html', 'php', 'sass', 'browser-sync', 'watch']);

gulp.task('default', gulp.series('html', 'php', 'sass', 'browser-sync', 'watch', function (done) {
    // default task code here

    done();
}));

//==================================
// Build Tasks
//==================================
// gulp.task('build', function () {
//     gulp.src([
//         folder + 'css/vendor/**/*.css',
//         folder + 'css/main.css',
//         folder + 'css/reset.css'
//     ]).pipe(cleanCSS({compatibility: 'ie8'}))
//         .pipe(autoprefixer())
//         .pipe(concat('vendor.css'))
//         .pipe(gulp.dest(dest + 'css'));
//
//     gulp.src(folder + 'sass/style.scss')
//         .pipe(sass().on('error', sass.logError))
//         .pipe(cleanCSS({compatibility: 'ie8'}))
//         .pipe(autoprefixer())
//         .pipe(gulp.dest(dest + 'css'));
//
//     gulp.src([
//         folder + 'js/vendor/**/*.js',
//         folder + 'js/transpolis.js'
//     ])
//         .pipe(concat('main.js'))
//         .pipe(uglify())
//         .pipe(gulp.dest(dest + 'js'));
// });
