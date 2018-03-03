module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({

		cssmin : {
			target : {
				src : ["css/style.css"],
				dest : "dist/style.min.css"
			}
		}

	});

	//load cssmin plugin
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	//create default task
	grunt.registerTask("default", ["cssmin"]);
};  