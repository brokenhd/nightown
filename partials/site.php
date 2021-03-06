<?php

// Load compoaser dependencies
include( __dir__ . '/../vendor/autoload.php');

/**
 * Globally load site content for access across views.
 */

use Symfony\Component\Yaml\Parser;

// Using the yaml parser to read content files
$yaml = new Parser();

// Site Content
$global = $yaml->parse(file_get_contents( __dir__ . '/../content/global.yaml'));
$game = $yaml->parse(file_get_contents( __dir__ . '/../content/game.yaml'));
$updates = $yaml->parse(file_get_contents( __dir__ . '/../content/updates.yaml'));
$characters = $yaml->parse(file_get_contents( __dir__ . '/../content/characters.yaml'));
