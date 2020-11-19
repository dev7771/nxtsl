<?php

namespace Controllers;

use Core\Request;
use Models\User;
use Core\Response;
class UserController {


	public  $response;


	public function __construct() {

		$this->response = new Response;
	}


	public function index(Request $request ) {
			
		 $users = User::all();


		 return $this->response->respond(json_encode(['data' =>$users ]), 200);
	}



	public function store(Request $request) {
		
		// ...
		// bla bla bla
		// ...

		return $this->response->respond(json_encode(['data' => 'user has been created']), 201);
	}
}

