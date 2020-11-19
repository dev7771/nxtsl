<?php

namespace Router;
/**
 * API for getting data and creating
 */ 

use Core\Request;
use Core\Route;
use Core\Resolver;


class RouterServiceProvider   {


	public function __construct() {

		$this->mapper();
	}



	public function mapper() {

		$route = new Route();
		$route->get( 'user',   'UserController@index');
		$route->post('user',   'UserController@store');
	} 

}



