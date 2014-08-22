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

namespace Bloog\Functions;

function merge() {
	$args = func_get_args();
	$merge = array_shift($args); // The first argument should be the merge array.
	foreach($args as $arr) {
		foreach($arr as $key => $val) {
			if(is_array($val) &&
			   isset($merge[$key]) &&
			   is_array($merge[$key])) {
				$merge[$key] = merge($merge[$key], $val);
			} else {
				$merge[$key] = $val;
			}
		}
	}

	return $merge;
}