module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        
        watch: {
            css: {
              files: 'assets/css/**/*.scss',
              tasks: ['sass'],
              options: {
                livereload: true,
              },
            },
          },
        sass: {
             dist: {
               options: {
                 style: 'expanded'
               },
               files: {
                 'assets/css/ac-inuk.min.css': 'assets/css/style.scss',
               }
             }
           }   

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['']);

};