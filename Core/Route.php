<?php

namespace Core;
use Controllers\UserController;
use Core\Request;

class Route extends Resolver {


	/**
	 *
	 * POST TYPE, GET type2, exception.
	 */
 	public function get(string $slug, string $action) {
 
 		if($_SERVER['REQUEST_METHOD'] == 'GET' && $this->handler($slug)) {
 		  $controller = explode('@', $action)[0];
		  $method     = explode('@', $action)[1];

		  $request    = new Request();
		  $controller = "\Controllers\\".$controller;
		  $init       = new $controller;
		  $init->$method($request);
          die();
 		}
 	}

 	public function post(string $slug, string $action) {

 		if($_SERVER['REQUEST_METHOD'] == 'POST' && $this->handler($slug)) {
 		  $controller = explode('@', $action)[0];
		  $method     = explode('@', $action)[1];

		  $request = new Request();
		  $init = new UserController();
		  $init->$method($request);
          die();
 		}
 	}


 	public function handler(string $slug) {

 		if($this->slugs[0] == $slug)
 			return true;
 		else
 			return false;
 	}

 	public function requestMethod($type) {
 		

 		return $_SERVER['REQUEST_METHOD'] === $type ? true : false;

 	}
}