<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap{


	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['contatos'] = array(
			'route' => '/contatos',
			'controller' => 'indexController',
			'action' => 'contatos'
		);

		$this->setRoutes($routes);
	}

}

?>