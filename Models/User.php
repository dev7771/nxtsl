<?php

namespace Models;


class User {


	static $users = [
		[
			'name'=> 'Turan',
			'surname'=> 'Zamanli',
		],
		[
			'name'=> 'Turan',
			'surname'=> 'Zamanli',
		],
	];


	public static function all() {

		return self::$users;
	}
}