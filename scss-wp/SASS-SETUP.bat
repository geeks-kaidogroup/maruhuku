rem BATの場所にCD
cd /d %~dp0
rem _layout.scssを関連付けで開く
start _layout.scss
rem SCSS監視開始
start compass watch