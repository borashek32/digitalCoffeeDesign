const { src, dest, watch, parallel } = require('gulp');

const browserSync  = require('browser-sync').create();
const sass         = require('gulp-dart-sass');
const autoprefixer = require('gulp-autoprefixer');
const concat       = require('gulp-concat');
const cleanCSS     = require('gulp-clean-css');


function browsersync() {
    browserSync.init({
        proxy: "digitalDesign",
        notify: false,
    })
}

function styles() {
    return src('web/sass/style.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(sass())
        .pipe(concat('style.min.css'))
        .pipe(autoprefixer({
            cascade: false,
            grid: true,
        }))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(dest('web/css/'))
        .pipe(browserSync.reload({ stream: true }));
}

function startwatch() {
    watch('web/sass/style.sass', styles);
    watch('views/layouts/*.php').on('change', browserSync.reload);
    watch('views/site/*.php').on('change', browserSync.reload);
}

exports.styles      = styles;
exports.startwatch  = startwatch;
exports.browsersynk = browsersync;

exports.default     = parallel(styles, browsersync, startwatch);