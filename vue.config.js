const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  filenameHashing: false,
productionSourceMap: false,
outputDir: './dist/',
configureWebpack: {
    devtool: 'source-map',
    output: {
        filename: '[name].js'
    }
},
pages: {
    app: {
        entry: 'src/main.js',
        template: 'public/index.html',
        filename: 'index.html',
        title: 'chunk-vendors',
        chunks: ['chunk-vendors', 'chunk-common', 'chunk-vendors']
    },
      
},

})
