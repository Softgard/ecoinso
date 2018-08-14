var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;

gulp.task('default', function () {

    // Serve files from the root of this project
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });

    gulp.watch(["*.html", "*.css", "css/*.css", "images/*.*", "php/*.php", "js/*.js"]).on("change", reload);
});