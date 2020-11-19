<?php
namespace Core;

class Response {


	public function __construct() {

	}


	public function respond(string $message,  $statusCode) {

			$protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

	    	 header($protocol . ' ' . $statusCode );


			echo $message;
			
	}


}