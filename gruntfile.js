/*
 * grunt-cli
 * http://gruntjs.com/
 *
 * Copyright (c) 2012 Tyler Kellen, contributors
 * Licensed under the MIT license.
 * https://github.com/gruntjs/grunt-init/blob/master/LICENSE-MIT
 */

'use strict';

module.exports = function(grunt) {

    grunt.initConfig({
        concat: {
            css: {
                src: [
                    'asset/css/bootstrap-reboot.min.css',
                    'asset/css/bootstrap.min.css',
                    'asset/scss/theme.css',
                ],
                dest: 'public/css/all_minify.css'
            },

            js: {
                src: [
                    'jquery-3.6.0.min.js',
                    'asset/js/bootstrap.bundle.min.js',
                ],
                dest: 'public/js/all_minify.min.js'
            }
        },
        // uglify: {
        //     js: {
        //         src: 'public/css/js/script_minified.js',
        //         dest: 'public/css/js/script_minified.min.js'
        //     }
        // },
        cssmin: {
            css: {
                src: 'public/css/all_minify.css',
                dest: 'public/css/all_minify.min.css'
            }
        },
        watch: {
            css: {
                files: ['asset/css/*.css'],
                tasks: ['concat', 'cssmin'],
            },
            scripts: {
                files: ['asset/js/*.js'],
                tasks: ['concat', 'uglify'],
            },
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('build', ['concat', 'cssmin']);
};