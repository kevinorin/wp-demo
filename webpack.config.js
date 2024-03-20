const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

module.exports = {
  entry: './assets/scss/global.scss',
  output: {
    // Assuming the current config file is in the theme root
    // Adjust accordingly if your webpack.config.js is located elsewhere
    path: path.resolve(__dirname),
    filename: 'style.js', // Required but not used
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      // This will now directly output to the theme's root
      filename: 'style.css',
    }),
  ],
};
