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
          "style.min.css": 
          [
            "less/helpers.less", 
            "less/styles.less",
            "less/gigpress.less"
          ]
        }
      }
    },
    watch: {
      styles: {
        // Which files to watch (all .less files recursively in the less directory)
        files: ['less/**/*.less'],
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    },
     uglify: {
      my_target: {
        files: {
          'js/scripts.min.js': 
          [
            'js/slide-gallery.js', 
            'js/gig-tabs.js', 
            'js/soundcloud.js'
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