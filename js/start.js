/**
 * Bootstrap the JS.  This is invoked by main.js.  Add site
 * specific initialization logic to this.
 */
define(function (require) {

	// Util to build Backbone views from a jQuery selection
	require('vendor/jquery-views');

	// JS Animation processing
	require('velocity');

	// Call backbone modules here in this manner
	$('.characters').views(require('shared/character'));
	
});
