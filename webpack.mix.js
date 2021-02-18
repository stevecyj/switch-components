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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    // .version()
    .vue()
    .extract()
    .webpackConfig({
        output: {
            // publicPath: "/laravel-vue-minimal/public/", // 不加會噴錯
            // publicPath: "/~steve_tsao/switch-components/public/",
            publicPath: '/switch-components/public/',
            chunkFilename: 'js/chunk/[name].js?v=[contenthash]', // 分割文件存放位置
        },
    })
    .sourceMaps();
