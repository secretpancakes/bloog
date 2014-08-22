<?php
	/**
	 * Bloog v0.2 (Namespace Rewrite)
	 * This is a rewrite of the original bloog at http://github.com/duanejeffers/bloog
	 *
	 * (c) Copyright 2014 Duane Jeffers / Secret Pancakes (http://github.secretpancak.es/bloog/)
	 *				 2013 Duane Jeffers (duane@duanejeffers.com)
	 *
	 * See LICENSE File for License information.
	 */

// Required functionality.
include 'src/Functions/Functions.php';

include 'src/Config.php';
include 'src/Bloog.php';

use Bloog\Bloog;
use Bloog\Config;

$bloog = new Bloog(new Config(array(

)));

$bloog->render();