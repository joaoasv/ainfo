'use strict';
module.exports = function (grunt) {
    require('load-grunt-tasks')(grunt);
    grunt.initConfig({
        watch: {
            sass: {
                files: ['assets/style/**/*.{scss,sass}'],
                tasks: ['sass', 'cssmin']
            },
            options: {
                livereload: true
            }
        },

        sass: {
            dist: {
                options: {
                    style: 'expanded',
                },
                files: {
                    'assets/style/css/main.css': 'assets/style/sass/main.scss'
                }
            }
        },

        cssmin: {
            options: {
                keepSpecialComments: 1
            },
            minify: {
                expand: true,
                cwd: 'assets/style/css',
                src: ['*.css', '!*.min.css'],
                dest: 'public/assets/css',
                ext: '.css'
            }
        },

        browserSync: {
            dev: {
                bsFiles: {
                    src: ['./*.php', './public/assets/js/*.js', , './public/assets/css/*.css', './public/assets/images/**/*.{png,jpg,jpeg,gif,webp,svg}']
                },
                options: {
                    proxy: "http://localhost/ainfo/",
                    watchTask: true
                }
            }
        }

    });
    grunt.registerTask('default', ['sass', 'cssmin', 'browserSync', 'watch']);
};