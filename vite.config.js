import {
  defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import html from '@rollup/plugin-html';
import {
  glob
} from 'glob';

/**
 * Get Files from a directory
 * @param {string} query
 * @returns array
 */
function GetFilesArray(query) {
  return glob.sync(query);
}

// Processing Vendor JS Files
const vendorJsFiles = GetFilesArray('resources/assets/vendor/js/*.js');

// Processing Core, Themes & Pages Scss Files
const CoreScssFiles = GetFilesArray('resources/assets/vendor/scss/**/!(_)*.scss');

// Processing Fonts Scss Files
const FontsScssFiles = GetFilesArray('resources/assets/vendor/fonts/!(_)*.scss');

// Processing Fonts JS Files
const FontsJsFiles = GetFilesArray('resources/assets/vendor/fonts/!(_)*.js');

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
        ...CoreScssFiles,
        ...FontsScssFiles,
        ...FontsJsFiles
      ],
      refresh: true,
    }),
    html()
  ],
});
