/*global module:false*/
module.exports = function(grunt) {
  // load css minifier

  // Project configuration.
  grunt.initConfig({
    concat: {
        options: {
          separator: ';',
          stripBanners: true
        },
        js: {
          src: ['static/js/jquery.min.js', 'static/js/main.js'],
          dest: 'static/js/phryxus.js'
        },
        css: {
          src: ['static/css/normalize.css', 'static/css/style.css'],
          dest: 'static/css/phryxus.css'
        }
      },
    cssmin: {
       dist: {
        src: 'static/css/phryxus.css',
        dest: 'static/css/phryxus.min.css'
       }
    },
    uglify: {
      dist: {
        src: 'static/js/phryxus.js',
        dest: 'static/js/phryxus.js'
      }
    },
    jshint: {
       beforeconcat: ['static/js/main.js']
    },
    'ftp-deploy': {
      dev: {
      auth: {
        host: 'phryxus',
        port: 21,
        authKey: 'key2'
      },
      src: ['../httdocs/'],
      dest: '/var/www/vhosts/fornerarquitectos.dev/htdocs/',
      exclusions: [
      "../httdocs/.git", 
      '../httdocs/.ftppass', 
      '../httdocs/.gitignore', 
      '../httdocs/Gruntfile.js', 
      '../httdocs/package.json', 
      '../httdocs/sftp-config.json',
      '../httdocs/node_modules',
      '../httdocs/system',
      '../httdocs/application/plugins']
    }
  },
  less: {
    production: {
      options: {
        paths: ["static/css"],
        yuicompress: /* true*/ false
      },
      files: {
        "static/css/mainless.css": "static/less/main.less"
      }
    }
  }

  });


  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-compress');
  grunt.loadNpmTasks('grunt-css');
  grunt.loadNpmTasks('grunt-ftp-deploy');
  grunt.loadNpmTasks('grunt-contrib-less');

  grunt.registerTask('default', ['less', 'ftp-deploy']);


  // grunt.registerTask('default', ['jshint', 'concat', 'cssmin', 'uglify', 'ftp-deploy:dev']);

};
