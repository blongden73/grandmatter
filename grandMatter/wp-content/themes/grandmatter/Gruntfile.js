module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'style.css' : 'style/style.scss'
				}
			}
		},

		postcss: {
				options: {
						map: true,
						processors: [
								require('autoprefixer')
						]
				},
				dist: {
						src: 'style.css'
				}
		},

    cssmin: {
      options: {
        mergeIntoShorthands: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'deploy/style.css': 'style.css'
        }
      }
    },

    minified : {
      files: {
        src: [
          'js/**/*.js',
          'js/*.js'
        ],
        dest: 'deploy/js/'
      },
      options : {
        sourcemap: true,
        allinone: false
      }
    },

		'ftp-deploy': {
		  build: {
		    auth: {
		      host: '46.32.240.13',
		      port: 21,
		      authKey: 'key1'
		    },
		    src: 'deploy',
		    dest: '/public_html/wp-content/themes/grandMatter/deploy',
		    exclusions: ['deploy/**/.DS_Store']
  	}
	},

		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass']
			}

		}
	});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-minified');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-ftp-deploy');
	grunt.registerTask('default',['sass', 'postcss:dist', 'cssmin', 'minified', 'ftp-deploy', 'watch']);
	grunt.registerTask('compile',['sass', 'postcss:dist', 'cssmin', 'minified']);
	grunt.registerTask('deploy',['sass', 'postcss:dist', 'cssmin', 'minified', 'ftp-deploy']);
};
