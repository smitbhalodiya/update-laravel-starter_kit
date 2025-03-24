import {
  defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import html from '@rollup/plugin-html';
import {
  glob
} from 'glob';
import path from 'path';

/**
 * Get Files from a directory
 * @param {string} query
 * @returns array
 */
function GetFilesArray(query) {
  return glob.sync(query);
}

// Page JS Files
const pageJsFiles = GetFilesArray('resources/assets/js/*.js');

// Processing Vendor JS Files
const vendorJsFiles = GetFilesArray('resources/assets/vendor/js/*.js');

// Processing Libs JS Files
const LibsJsFiles = GetFilesArray('resources/assets/vendor/libs/**/*.js');

// Processing Libs Scss & Css Files
const LibsScssFiles = GetFilesArray('resources/assets/vendor/libs/**/!(_)*.scss');
const LibsCssFiles = GetFilesArray('resources/assets/vendor/libs/**/*.css');

// Processing Core, Themes & Pages Scss Files
const CoreScssFiles = GetFilesArray('resources/assets/vendor/scss/**/!(_)*.scss');

// Processing Fonts Scss & JS Files
const FontsScssFiles = GetFilesArray('resources/assets/vendor/fonts/!(_)*.scss');
const FontsJsFiles = GetFilesArray('resources/assets/vendor/fonts/**/!(_)*.js');

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/assets/css/demo.css',
        'resources/js/app.js',
        ...pageJsFiles,
        ...vendorJsFiles,
        ...LibsJsFiles,
        ...CoreScssFiles,
        ...LibsScssFiles,
        ...LibsCssFiles,
        ...FontsScssFiles,
        ...FontsJsFiles
      ],
      refresh: true
    }),
    html()
  ],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources'),
    },
  },
});
