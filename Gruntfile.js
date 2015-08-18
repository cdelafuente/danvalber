module.exports = function (grunt) {
  
  // Project configuration
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dev: {
        options: {
          style: 'compressed'
        },
        files: [{
          expand: true,
          cwd: 'styles/sass/pages',
          src: ['*.scss'],
          dest: 'styles/css',
          ext: '.css'
        }]
      },
      prod: {
        options: {
          style: 'compressed',
          sourcemap: 'none'
        },
        files: [{
          expand: true,
          cwd: 'styles/sass/pages',
          src: ['*.scss'],
          dest: 'styles/css',
          ext: '.css'
        }]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.registerTask('default', ['sass']);
};
