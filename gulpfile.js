//プラグインの読み込み
var gulp = require("gulp");
var sass = require("gulp-sass");
var pug = require("gulp-pug");

//タスクの設定

gulp.task("default", function(){
    //sassのコンパイル
    //sassファイルの変更を監視
    gulp.watch("css/style.scss",function(){
        gulp.src("css/style.scss")
            .pipe(sass())
            .pipe(gulp.dest("css/"));
    });

    //pugのコンパイル
    //pugファイルの変更を監視
    gulp.watch("index.pug",function(){
      gulp.src("index.pug")
        .pipe(pug({
          pretty: true //コードを整形するオプション
        }))
        .pipe(gulp.dest('dist/'));
    });
});


