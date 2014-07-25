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
          '<%= pkg.directories.dev %>/css/style.css' : '<%= pkg.directories.dev %>/scss/style.scss'
        }
      }
    },
    watch: {
      css: {
        files: ['<%= pkg.directories.dev %>/scss/**/*.scss'],
        tasks: ['css']
        
      },
      options: {
        livereload: true,
      }
    },
    open: {
      dev: {
        path: '<%= pkg.directories.path %>/<%= pkg.directories.dev %>/',
        app: 'Google Chrome'
      },
      dist: {
        path: '<%= pkg.directories.path %>/<%= pkg.directories.dist %>/',
        app: 'Google Chrome'
      }
    }
  });

  grunt.registerTask('default', []);
  grunt.registerTask('css',  ['sass']);
  grunt.registerTask('dev', ['open:dev', 'watch']);
};