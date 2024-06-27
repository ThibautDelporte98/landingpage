const path = require('path');

module.exports = {
  mode: 'development',
  entry: [
    './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
    './assets/js/serviceGallery.js',
    // './assets/js/formvalidation.js',
    './assets/js/showMore.js',
    './assets/js/emailSend.js',

  ],
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist/js/'),
  },
};