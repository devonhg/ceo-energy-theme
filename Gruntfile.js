module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      js: {
        src: 'build/scripts.js',
        dest: 'build/scripts.min.js'
      },
    },
	cssmin: {
		css :{
			src: 'build/styles.css',
			dest: 'build/styles.min.css'			
		},
	},
	concat: {
		js:{
			src: ["src/**/*.js"],
			dest: "build/scripts.js",
		},	
		css:{
			src: ["src/**/*.css", "!src/**/*.map"],
			dest: "build/styles.css",
		}
	},
	watch: {
		sass: {
			files: ['src/sass/*.scss'],
			tasks: ['sass', 'concat', 'cssmin', 'uglify'],			
		},
		js: {
			files: ['src/**/*.js'],
			tasks: ['concat', 'cssmin', 'uglify'],
		},
		css: {
			files: ['src/**/*.css'],
			tasks: ['concat', 'cssmin', 'uglify'],
		},
	},
	sass: {
		main: {
			src: ["src/sass/main.scss"],
			dest: "src/css/sass.css",			
		},
	},
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['sass' ,'concat', 'uglify', 'cssmin','watch']);

};