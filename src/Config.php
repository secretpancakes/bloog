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

use Bloog\Functions\merge;

class Config {
	protected $config;

	public function mergeConfigArr($config) {
		$this->config = merge($this->config, $config);
		return $this;
	}

	public function mergeConfigFile($filename) {
		if(is_file($filename)) {
			return $this->mergeConfigArr(include $filename);
		} else {
			//throw new Exception('Config File Not Found or Readable.');
			return FALSE;
		}
	}

	public function __construct(array $config) {
		$this->config = $config;

		return $this;
	}

	public function __get($name) {
		return $this->config[$name];
	}

	public function __set($name, $value) {
		$this->config[$name] = $value;
	}

	public function __isset($name) {
		return isset($this->config[$name]);
	}

	public function __unset($name) {
		unset($this->config[$name]);
	}
}