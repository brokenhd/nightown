/**
 * Character Switcher
 */
define(function(require) {

	// Dependencies
	var $ = require('jquery'),
		_ = require('underscore'),
		Backbone = require('backbone');

	// Init view
	var View = {};

	// Constructor
	View.initialize = function() {
		_.bindAll(this);

		// Selectors
		this.$win = $(window);
		this.$currentCharacter = this.$el.find('.current-character');
		this.$currentDescription = this.$el.find('.current-description');
		this.$characters = this.$el.find('.character');

		// Listeners
		this.$characters.on('click', this.toggleCharacter);
	};

	View.toggleCharacter = function(e) {
		$current = e.currentTarget;
		$m = $($current).find('.model').clone();
		$d = $($current).find('.description').clone();
		this.switchModels($m);
		this.switchBios($d);
	};

	View.switchModels = function(m) {
		this.$currentCharacter.find('.model').remove();
		this.$currentCharacter.append(m);
	};

	View.switchBios = function(d) {
		this.$currentDescription.find('.description').remove();
		this.$currentDescription.append(d);
	};

	// Return the view
	return Backbone.View.extend(View);
});
