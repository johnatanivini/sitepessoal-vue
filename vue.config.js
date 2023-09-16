const webpack = require('webpack');

module.exports = {
  transpileDependencies: ["vuetify"],
  outputDir:'dist',
  configureWebpack:{
    plugins:[
      new webpack.DefinePlugin({
        'process.env':{
          NODE_ENV:JSON.stringify(process.env.NODE_ENV),
          VUE_APP_API_URL:JSON.stringify("https://www.johnatanivini.eti.br/")
        },
      })
    ]
  }
};
