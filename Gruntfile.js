module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            dist: {
                src: [
                    'js/plugins.js',
                    'js/main.js'
                ],
                dest: 'js/build.js',
            }
        },

        uglify: {
            build: {
                src: 'js/build.js',
                dest: 'js/build.min.js'
            }
        },

        jshint: {
            options: {
                reporter: require('jshint-stylish')
            },
            all: [
                'js/main.js'
            ]
        },

        less: {
            compile: {
                files: {
                    'style.css' : 'less/_style.less'
                }
            },
            minify: {
                options: {
                    cleancss: true
                },
                files: {
                    'style.css' : 'less/_style.less'
                }
            }
        },

        watch: {
            scripts: {
                files: [
                    'js/plugins.js',
                    'js/main.js'
                ],
                tasks: [
                    'concat', 'uglify'
                ],
                options: {
                    spawn: false
                }
            },

            less: {
                files: ['less/*'],
                tasks: ['less:compile', 'less:minify']
            },

            css: {
                files: ['*.css']
            },

            livereload: {
                files: ['*.css'],
                options: {
                    livereload: true
                }
            }
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    require('load-grunt-tasks')(grunt);

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'less', 'watch']);

};