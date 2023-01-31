const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    "resources/css/styles.css",
], "public/css/main.css");
mix.js([
    "resources/js/scripts.js", 
    "resources/demo/chart-area-demo.js", 
    "resources/demo/chart-bar-demo.js", 
    "resources/js/datatables-simple-demo.js"
], "public/js/main.js")
