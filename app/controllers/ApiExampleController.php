<?php

namespace app\controllers;

use flight\Engine;
use app\models\UserModel;

class ApiExampleController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

}