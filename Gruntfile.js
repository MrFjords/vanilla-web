module.exports = function(grunt) {

  "use strict";
  require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {                              
      dev: {                            
        options: {                       
          style: 'nested'
        },
        files: {                         
          '<%= pkg.dev %>/css/style.css' : '<%= pkg.dev %>/scss/style.scss'
        }
      }
    },
    watch: {
      css: {
        files: ['<%= pkg.dev %>/scss/**/*.scss'],
        tasks: ['css']
        
      },
      options: {
        livereload: true,
      }
    },
    open: {
      dev: {
        path: '<%= pkg.path %>',
        app: 'Google Chrome'
      }
    }
  });

  grunt.registerTask('default', []);
  grunt.registerTask('css',  ['sass']);
  grunt.registerTask('dev', ['open:dev', 'watch']);
};