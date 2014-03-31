module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            css: {
              files: 'assets/scss/**/*.scss',
              tasks: ['compass'],
              options: {
                livereload: true,
              },
            },
          },
        compass: {
             dist: {
               options: {
                 sassDir: 'assets/scss',
                 cssDir: 'assets/css'
               },

             }
           },
        cssmin: {
            build: {
              files: {
                'assets/css/style.css': [ 'assets/css/style.css' ]
              }
            }
        },
        autoprefixer: {
          build: {
            expand: true,
            cwd: 'assets/css',
            src: [ '**/*.css' ],
            dest: 'assets/css'
          }
        },

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-autoprefixer');


    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['compass','autoprefixer', 'cssmin']);

};