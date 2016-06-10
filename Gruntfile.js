module.exports = function(grunt) {
	grunt.initConfig({
		requirejs: {
			compile: {
				options: {
					name: "main",
					baseUrl: "js",
					mainConfigFile: "js/main.js",
					out: "dist/main.js"
				}
			}
		},
		sass: {
			dist: {
				options:{
					style:'compressed',
					trace: true,
					style: 'compact',
					lineNumbers: true
				},
				files: {
					'dist/main.css' : 'sass/style.scss'
				}
			}
		},
		autoprefixer:{
			dist:{
				options: {
					map: false,
					browsers: ['last 2 versions', 'ie 8', 'ie 9']
				},
				files:{
					'dist/style.css':'dist/style.css'
				}
			}
		},
		browserSync: {
			dev: {
				bsFiles: {
					src : ['dist/style.css', 'dist/main.js', '**/*.php', 'content/**/*.yaml']
				},
				options: {
					watchTask: true,
					proxy: "nightown.dev"
				}
			}
		},
		cssmin: {
			target: {
				files: [{
					expand: true,
					cwd: 'dist',
					src: ['*.css', '!*.min.css'],
					dest: 'dist',
					ext: '.min.css'
				}]
			}
		},
		watch: {
			css: {
				files: 'sass/**/*.scss',
				tasks: ['sass', 'autoprefixer']
			},
			js: {
				files: 'js/**/*',
				tasks: ['requirejs']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-requirejs');
	grunt.loadNpmTasks('grunt-browser-sync');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.registerTask('default',['sass','autoprefixer','cssmin','requirejs','browserSync','watch']);
	grunt.registerTask('compile',['sass','autoprefixer','cssmin','requirejs']);
}
