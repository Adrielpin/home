const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// GERAL
 mix.copy(['node_modules/bootstrap/dist/fonts', 'node_modules/font-awesome/fonts'], 'public/fonts');
 mix.copy(['node_modules/tinymce'], 'public/assets/tinymce');
 mix.copy(['resources/assets/img'], 'public/assets/img');

 //  BEGIN PORTAL PACKAGE

 mix.styles([
 	"resources/assets/css/css/*"
 	],"public/assets/portal.css");

 mix.scripts([
 	"resources/assets/js/old-javascript/libpack3.js",
 	"resources/assets/js/old-javascript/base.js",
 	"resources/assets/js/old-javascript/translate.js",
 	"resources/assets/js/old-javascript/home.js",
 	"resources/assets/js/old-javascript/subscribe.js",
 	"resources/assets/js/old-javascript/ensaio.js",
 	"resources/assets/js/old-javascript/mb-menu.js",
 	"resources/assets/js/new-javascript/*.js",
 	],"public/assets/portal.js");

// END PORTAL PACKEGE

// BEGIN ADMIN PACKAGE
mix.styles([
	"node_modules/bootstrap/dist/css/bootstrap.css",
	"node_modules/font-awesome/css/font-awesome.css",
	"resources/assets/css/admin-styles/timeline.css",
	"resources/assets/css/admin-styles/admin-menu.css",
	"resources/assets/css/admin-styles/metisMenu.css"
	],"public/assets/admin.css");

mix.scripts([
	"node_modules/jquery/dist/jquery.js",
	"node_modules/bootstrap/dist/js/bootstrap.js",
	"node_modules/metismenu/dist/metisMenu.js",
	"resources/assets/js/admin-js/Chart.js",
	"resources/assets/js/admin-js/admin-bella.js",
	"resources/assets/js/admin-js/frontend.js",
	],"public/assets/admin.js");

// END ADMIN PACKAGE