module.exports = function (grunt) {
	require('jit-grunt')(grunt);

	grunt.initConfig({

		cssmin: {
			target: {
				src: ["css/style.css"],
				dest: "dist/style.min.css"
			}
		},
		htmlmin: {
			dist: {                                      // Target
				options: {                                 // Target options
					removeComments: true,
					collapseWhitespace: true
				},
				files: {                                   // Dictionary of files
					'index.html': 'dist/index.min.html'    // 'destination': 'source'
				}
			},
			dev: {                                       // Another target
				files: {	
					'index.html': 'dist/index.min.html'
				}
			}
		},
	});

	grunt.registerTask('default', ['htmlmin']);

	//load cssmin plugin
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	//create default task
	grunt.registerTask("default", ["cssmin"]);
};  