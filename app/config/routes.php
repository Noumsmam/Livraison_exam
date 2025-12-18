<?php

use app\controllers\ChauffeurController;
use app\controllers\ColisController;
use app\controllers\UserController;
use app\middlewares\SecurityHeadersMiddleware;
use app\models\ChauffeurModel;
use app\models\ColisModel;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {

	$router->get('/',function () {
		Flight::render('home');
	});

	$router->post('/login',[UserController::class,'login']);

	$router->get('/colis',function() {
		$colis = new ColisModel(null,null,null);
		Flight::render('colis',['colis' => $colis->getAllColis()]);
	});

	$router->post('/colis/create',[ColisController::class,'createColis']);

	$router->get('/chauffeur',function() {
		$c=new ChauffeurModel(null,null,null);
		Flight::render('chauffeur',['chauffeur' => $c->getAllChauffeur()]);
	});

	$router->post('/chauffeur/create',[ChauffeurController::class,'addCHauffeur']);

	// $router->group('/api', function() use ($router) {	
	// 	$router->get('/users', [ ApiExampleController::class, 'getUsers' ]);
	// 	$router->get('/users/@id:[0-9]', [ ApiExampleController::class, 'getUser' ]);
	// 	$router->post('/users/@id:[0-9]', [ ApiExampleController::class, 'updateUser' ]);
	// });
	
}, [ SecurityHeadersMiddleware::class ]);