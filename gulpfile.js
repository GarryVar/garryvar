'use strict';

const gulp = require('gulp'),
  constdel = require('del'),
  postcss = require('gulp-postcss'),
  postcssImport = require('postcss-import'),
  autoprefixer = require('autoprefixer'),
  csso = require('postcss-csso'),
  rename = require('gulp-rename'),
  del = require('del'),
  bs = require('browser-sync').create(),
  babel = require('gulp-babel'),
  terser = require('gulp-terser');



//Paths for gulp tasks
const host = {
  serverDir: 'localhost',
  getPath: function(dir) {
    return `${this.serverDir}/${dir}`
  }
};



//Clean
const clean = () => {
  return del(host.serverDir)
};
exports.clean = clean;



// Styles
const styles = () => {
  return gulp.src('./src/assets/index.css')
    .pipe(postcss([
      postcssImport(),
      autoprefixer(),
      csso()
    ]))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(host.getPath('styles')))
    .pipe(bs.stream({stream: true}))
};
exports.styles = styles;



//Scripts
const scripts = () => {
  return gulp.src('src/scripts/**/util.js')
    .pipe(babel({
      presets: ['@babel/preset-env']
    }))
    .pipe(rename({suffix: '.min'}))
    .pipe(terser())
    .pipe(gulp.dest(host.getPath('scripts')))
    .pipe(bs.stream({stream: true}))
};
exports.scripts = scripts;



//indexPhp
const indexPhp = () => {
  return gulp.src('src/index.php')
    .pipe(gulp.dest(host.serverDir))
    .pipe(bs.stream({stream: true}))
}
exports.indexPhp = indexPhp;



//componentsPhp
const componentsPhp = () => {
  return gulp.src('src/components/**/*.php')
    .pipe(gulp.dest(host.getPath('components')))
    .pipe(bs.stream({stream: true}))
}
exports.componentsPhp = componentsPhp;



//Refresh
const refresh = done => {
  bs.reload();
  done();
}
exports.refresh = refresh;




//Copy
const copy = () => {
  return gulp.src([
    'src/components/**/*.php',
    'src/img/**',
  ],
    {base: 'src'}
    )
    .pipe(gulp.dest(host.serverDir))
}
exports.copy = copy;


//Sync

const sync = () => {
  bs.init({
    proxy: 'http://localhost',
    open: true,
    notify: false,
    cors: true,
    ui: false
  })
  gulp.watch('src/assets/**/*.css', gulp.series(styles, refresh));
  gulp.watch('src/scripts/**/util.js', gulp.series(scripts, refresh));
  gulp.watch('src/*.php', gulp.series(indexPhp, refresh));
  gulp.watch('src/components/**/*.php', gulp.series(componentsPhp, refresh));
};
exports.sync = sync;


//Build
const build = gulp.series(
  clean,
  copy,
  indexPhp,
  styles,
  scripts,
  sync);
exports.build = build;



//Start
const start = gulp.series(build, sync);
exports.start = start;

