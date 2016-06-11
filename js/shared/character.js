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
		this.setupGrid();
	};

	/**
	 * On first page load, insert the first character into current.
	 */
	View.setupGrid = function() {
		$initial = this.$characters.first();
		this.cloneCharacter($initial);
	};

	/**
	 * Detect the clicked character and pass values to selector.
	 */
	View.toggleCharacter = function(e) {
		$current = e.currentTarget;

		// Don't switch if the block is empty.
		if($($current).find('.description').is(':empty')) return;

		this.cloneCharacter($current);
	};

	/**
	 * Clone the Clicked character attributes.
	 */
	View.cloneCharacter = function(current) {
		// Get the items to show and clone instances of them.
		$n = $(current).find('.name').clone();
		$m = $(current).find('.model').clone();
		$d = $(current).find('.description').clone();

		// Fire the actual switch events
		this.switchModels($m, $n);
		this.switchBios($d);
	};

	/**
	 * Switch the model and the name of the character from the grid.
	 */
	View.switchModels = function(m, n) {
		this.$currentCharacter.find('.name').remove();
		this.$currentCharacter.find('.model').remove();

		this.$currentCharacter.append(n);
		this.$currentCharacter.append(m);
	};

	/**
	 * Switch the description underneath the grid for selected character.
	 */
	View.switchBios = function(d) {
		this.$currentDescription.find('.description').remove();
		this.$currentDescription.append(d);
	};

	// Return the view
	return Backbone.View.extend(View);
});
