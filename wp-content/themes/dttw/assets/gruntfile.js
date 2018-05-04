// Gruntfile.js

// our wrapper function (required by grunt and its plugins)
// all configuration goes inside this function
module.exports = function(grunt) {

  "use strict";
  // ===========================================================================
  // CONFIGURE GRUNT ===========================================================
  // ===========================================================================
  grunt.initConfig({

    // get the configuration info from package.json ----------------------------
    // this way we can use things like name and version (pkg.name)
    pkg: grunt.file.readJSON('package.json'),

    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'compressed',
          sourcemap: 'none',
          //loadPath: require('node-bourbon').includePaths
        },
        files: {                         // Dictionary of files
          'dist/css/app.css': 'src/css/app.scss'
        }
      }
    },

    // bake: {
    //     build: {
    //         options: {},
    //         files: {
    //           'dist/index.html': 'src/index.html'
    //         }
    //     }
    // },


    uglify: {
      options: {
        sourceMap: false
      },
      my_target: {
        files: {
          'dist/js/app.js': 'src/js/app.js'
        }
      }
    },


    watch: { 
      sass: {
        files: ['src/css/*.scss', 'src/css/modules/*.scss'],
        tasks: ['sass'],
        options : { nospawn : true, relative:true }
      },
      // bake: {
      //   files: ['src/**/*.html', 'src/*.html', 'includes/*.html'],
      //   tasks: ['bake']
      // },
      copy: {
        files: ['src/img/**/*.jpg','src/img/*.jpg','src/img/*.svg', 'src/js/*.js', 'src/css/*.css'],
        tasks: ['copy']
      },
      uglify: {
        files: ['src/js/*.js'],
        tasks: ['uglify']
      }
    },

    // touch: {
    //   target: ['*.html']
    // }

  });

  // ===========================================================================
  // LOAD GRUNT PLUGINS ========================================================
  // ===========================================================================
  // we can only load these if they are in our package.json
  // make sure you have run npm install so our app can find these

  grunt.loadNpmTasks('../../../../../../node_modules/grunt-contrib-watch');
  // grunt.loadNpmTasks('../../../../../../node_modules/grunt-bake');
  grunt.loadNpmTasks('../../../../../../node_modules/grunt-contrib-sass');
  grunt.loadNpmTasks('../../../../../../node_modules/grunt-touch');
  grunt.loadNpmTasks('../../../../../../node_modules/grunt-contrib-copy');
  grunt.loadNpmTasks('../../../../../../node_modules/grunt-contrib-uglify');
  grunt.loadNpmTasks('../../../../../../node_modules/grunt-contrib-imagemin');
};
