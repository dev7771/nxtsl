<?php

namespace Core;


class Request {


	protected $params;


	function __construct() {
		
		$this->collect();
	}


	public function collect() {

		$this->params = $_GET;
	}


	public function __get($name) {

			if( array_key_exists($name, $this->params))
			    return $this->params[$name];
	}
}


