// Require.js config
//
// LoDash is used in place of Underscore.
require.config({
	baseUrl: '/js/',
	stubModules: [
		'text'
	],
	map: {
		'*': {
			underscore: 'lodash',
			text: 'requirejs-text'
		}
	},
	shim: {
		velocity: [
			'jquery'
		]
	},
	paths: {
		jquery: 'empty:',
		backbone: 'node_modules/backbone/backbone',
		lodash: 'node_modules/lodash/index',
		velocity: 'node_modules/velocity-animate/velocity.min',
	}
});

// Shim in already loaded scripts
define('modernizr', function() { return window.Modernizr; });
define('jquery', function() { return window.jQuery; });

// Start the application
require(['start']);
