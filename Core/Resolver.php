<?php

namespace Core;



class Resolver {

	protected $slugs;

	protected $prefix;


	public function __construct() {

		$this->setSlugs();

		$this->setPrefix();
	}

	protected function setSlugs() {

		$this->slugs = explode('/', $_SERVER['PHP_SELF']); 
		
		array_shift($this->slugs);
	}


	protected function setPrefix() {
		
		$this->prefix = $this->slugs[0];

		array_shift($this->slugs);
	}
}