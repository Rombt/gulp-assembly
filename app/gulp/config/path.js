import * as nodePath from 'path';

const THEME_NAME = nodePath.basename(nodePath.resolve(__dirname, '..', '..', '..'));
const ROOT_PATH = nodePath.resolve(__dirname, '..', '..').replace(/\\/g, '/');

const srcFolder = `${ROOT_PATH}/src`;
const prodFolder = `${ROOT_PATH}/..`;
const wpPluginPath = `${ROOT_PATH}/../../../plugins/${THEME_NAME}-core`;



export const path = {
   prod: {
      wpPlugin: wpPluginPath,    // todo убрать т.к. есть wpPluginPath: wpPluginPath, в самом низу
      html: `${prodFolder}/docs`,
      stylesPhp: [
         `${prodFolder}/assets/styles`,
         `${wpPluginPath}/assets/styles`
      ],
      stylesHtml: `${prodFolder}/docs/assets/styles`,
      imgPhp: [
         `${prodFolder}/assets/img`,
         `${wpPluginPath}/assets/img`
      ],
      imgHtml: `${prodFolder}/docs/assets/img`,

      js: {
         app: `${prodFolder}/assets/js/`,
         html: `${prodFolder}/docs/assets/js/`,
         admin: `${wpPluginPath}/assets/js/`,
      },

   },
   src: {
      styles: {
         less: `${srcFolder}/assets/styles/main-style.less`,
         scss: `${srcFolder}/assets/styles/main-style.scss`,
      },
      html: `${srcFolder}/html/*.html`,
      js: [
         `${srcFolder}/assets/js/app.js`,
         `${srcFolder}/core-plugin/assets/js/admin.js`
      ],
      php: [
         `${srcFolder}/**/*.php`,
         `!${srcFolder}/core-plugin/**/*.php`
      ],
      wpPlugin: `${srcFolder}/core-plugin/**/*.php`,
      copy: [
         `${srcFolder}/README.md`,
         `${srcFolder}/style.css`,
         `${srcFolder}/screenshot.png`,
      ],
      images: [
         `${srcFolder}/assets/img/**/*.{jpg,jpeg,png,gif,webp,ico}`,
         `${srcFolder}/core-plugin/assets/img/**/*.{jpg,jpeg,png,gif,webp,ico}`
      ],
      svg: [
         `${srcFolder}/assets/img/**/*.svg`,
         `${srcFolder}/core-plugin/assets/img/**/*.svg`
      ],
   },
   watch: {
      styles: [
         `${srcFolder}/assets/styles/**/*.less`,
         `${srcFolder}/assets/styles/**/*.scss`,
         `${srcFolder}/core-plugin/assets/styles/**/*.less`,
      ],
      images: [
         `${srcFolder}/assets/img/**/*.{jpg,jpeg,png,gif,webp,svg,ico}`,
         `${srcFolder}/core-plugin/assets/img/**/*.{jpg,jpeg,png,gif,webp,svg,ico}`
      ],
      js: [
         `${srcFolder}/assets/js/**/*.js`,
         `${srcFolder}/core-plugin/assets/js/**/*.js`
      ],
   },

   ThemeName: THEME_NAME,
   RootPath: ROOT_PATH,
   srcFolder: srcFolder,
   prodFolder: prodFolder,
   wpPluginPath: wpPluginPath,

}




export const getDestPath = (file) => {
   const isCorePlugin = (file) => file.path.includes('core-plugin') || file.path.includes('-core');
   return isCorePlugin(file) ? app.path.prod.imgPhp[1] : app.path.prod.imgPhp[0];;
};