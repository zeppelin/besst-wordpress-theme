const mix = require('laravel-mix');
require('laravel-mix-postcss-config');
const tailwindcss = require('tailwindcss');

mix.postCss('./theme-style.css', './style.css').postCssConfig({
  plugins: (loader) => [
    require('postcss-import')({ root: loader.resourcePath }),
    tailwindcss('./tailwind.config.js'),
    require('postcss-nested')
  ]
});
