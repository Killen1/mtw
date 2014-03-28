module.exports = function(grunt) {
  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2,
          paths: ["mtw"]
        },
        files: {
          // target.css file: source.less file
          "wp-content/themes/mtw/style.min.css": 
          [
            "wp-content/themes/mtw/less/helpers.less", 
            "wp-content/themes/mtw/less/styles.less",
            "wp-content/themes/mtw/less/gigpress.less"
          ]
        }
      }
    },
    watch: {
      styles: {
        // Which files to watch (all .less files recursively in the less directory)
        files: ['/wp-content/themes/mtw/less/**/*.less'],
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    },
     uglify: {
      my_target: {
        files: {
          'wp-content/themes/mtw/js/scripts.min.js': 
          [
            'wp-content/themes/mtw/js/slide-gallery.js', 
            'wp-content/themes/mtw/js/gig-tabs.js', 
            'wp-content/themes/mtw/js/soundcloud.js'
          ]
        }
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);
  grunt.loadNpmTasks('grunt-contrib-uglify');
};