const path = require('path');


module.exports = {
    watch: true,
    entry: {
        boundle: path.resolve(__dirname,'src/js/script.js'),
    },
    output: {
      path: path.resolve(__dirname, 'dist'),
      filename: '[name].js',
    },
    
    devServer: {
      static: {
        directory: path.join(__dirname, 'dist'),
      },
      hot: true,
      compress: true,
      port: 9000,
    },

   
    module: {
      rules: [
        {
          test: [/\.css$/i, /\.s[ac]ss$/i],
          use: ["style-loader", "css-loader", "sass-loader",],
        },
      ],
    },
    
  };


