module.exports = function(grunt) {

  "use strict";
  require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    banner: {
      compact: '/*! <%= pkg.name %> <%= pkg.version %> - <%= pkg.author.name %> */',
      full: '/*!\n' +
        ' * <%= pkg.name %> v<%= pkg.version %>\n' +
        ' * Create Full banner*\n' +
        ' */',
      wordpress: '/*!\n' +
        ' * <%= pkg.name %> v<%= pkg.version %>\n' +
        ' * Create Wordpress banner*\n' +
        ' */'
    },
    sass: {                              
      dev: {                            
        options: {                       
          style: 'nested'
        },
        files: {                         
          '<%= pkg.directories.dev %>/css/style.css' : '<%= pkg.directories.dev %>/scss/style.scss',
          '<%= pkg.directories.dev %>/css/reset.css' : '<%= pkg.directories.dev %>/scss/reset.scss'
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
    },
    bowercopy: {
        options: {
            srcPrefix: 'bower_components'
        },
        scripts: {
            options: {
                destPrefix: 'dev/js/libs'
            },
            files: {
                'modernizr.js': 'modernizr/modernizr.js'
            }
        }
    }
  });

  grunt.registerTask('default', []);
  grunt.registerTask('css',  ['sass']);
  grunt.registerTask('dev', ['open:dev', 'watch']);
  grunt.registerTask('init', ['bowercopy']);
};