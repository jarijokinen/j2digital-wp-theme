import path from 'path';
import CopyPlugin from 'copy-webpack-plugin';
import MiniCssExtractPlugin from 'mini-css-extract-plugin';
import TerserPlugin from 'terser-webpack-plugin';

const config = {
  mode: 'production',
  entry: {
    main: { import: './src/js/main.js', filename: 'js/main.js' }
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          {
            loader: 'postcss-loader'
          },
          {
            loader: 'sass-loader',
            options: {
              sassOptions: {
                outputStyle: 'expanded'
              }
            }
          }
        ]
      }
    ]
  },
  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin()]
  },
  output: {
    path: path.resolve('dist')
  },
  plugins: [
    new CopyPlugin({
      patterns: [
        {
          from: './src/css/style.css',
          to: 'style.css'
        },
        {
          from: './src/php',
          to: '[path][name][ext]',
          transform(content) {
            return content
              .toString()
              .replaceAll('<%= slug %>', 'j2digital')
              .replaceAll('<%= timestamp %>', new Date().getTime());
          }
        }
      ]
    }),
    new MiniCssExtractPlugin({
      filename: 'css/[name].css'
    })
  ]
};

export default config;
