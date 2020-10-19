const path = require('path')
const webpack = require('webpack')

module.exports = {
    entry: './assets/js/frontend/frontend.js',
    output: {
        filename: 'frontend-bundled.js',
        path: path.resolve(__dirname, 'assets', 'js', 'frontend')
    },
    mode: "production",
    module: {
        rules: [{
            test: /\.js$/,
            exclude: /node_modules/,
            use: {
                loader: 'babel-loader',
                options: {
                    presets: ['@babel/preset-env']
                }
            }
        }]
    }
}