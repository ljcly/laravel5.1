let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/admin.scss', 'public/css/admin');



// 资源地图
mix.js('resources/assets/js/app.js', 'public/js').sourceMaps();




// Vendor Extraction
mix.js('resources/assets/js/app.js', 'public/js')
   .extract(['vue']);


// React
mix.react('resources/assets/js/app.jsx', 'public/js');

mix.script(
	[
		'public/js/admin.js',
    	'public/js/dashboard.js'
	],'public/js/all.js');


/**
 * [resolve 配置项]
 * @type {Object}
 */
mix.webpackConfig({
    resolve: {
        modules: [
            path.resolve(__dirname, 'vendor/laravel/spark/resources/assets/js')
        ]
    }
});

// 复制文件与目录
mix.copy('node_modules/foo/bar.css', 'public/css/bar.css');


// 版本与缓存清除
mix.js('resources/assets/js/app.js', 'public/js')
   .version();

if (mix.inProduction()) {
    mix.version();
}   

// Browsersync 自动加载刷新
mix.browserSync('my-domain.dev');

mix.browserSync({
    proxy: 'my-domain.dev'
});


// 通知
mix.disableNotifications();


