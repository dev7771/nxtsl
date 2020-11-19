<?php

namespace Core;


class Boot {

	public function __construct() {

		new \Router\RouterServiceProvider();
	}
}