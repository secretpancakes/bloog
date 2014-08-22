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

namespace Bloog;

class Bloog {
	protected $config;

	public function __construct(Config $config) {
		$this->config = $config;

		return $this;
	}

	// Fetch is the Main Application Execution.
	public function fetch() {

	}

	public function render() {
		echo $this->fetch();
	}

}