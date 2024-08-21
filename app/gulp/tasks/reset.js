/**
 *
 * ! Deletes !! ALL !! files from root theme folder and app.path.wpPluginPath
 * except app.path.clearWP and app.path.clearHtml
 *
 */

export const reset = done => {
  if (!app.path.clear.src || app.path.clear.src.length === 0) {
    console.log('ERROR: array clearPath does not exist!!!');
    return done();
  }

  console.log('app.path.clear.src = ', app.path.clear.src);
  console.log('app.path.prod = ', app.path.prod);

  return app.plugins.del(app.path.clear.src, { force: true });
};
