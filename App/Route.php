<?php
//Arquivo para as rotas.

namespace App;

class Route {

	private $routes;

	public function __construct(){
		$this->initRoutes();
	}


	public function getRoutes(){
		return $this->routes;
	}

	public function setRoutes(array $routes){
		$this->routes = $routes;
	}
	//Quais são as rotas que a aplicação tem.
	public function initRoutes(){

		//Uma das pág é a home
		$routes['home'] = array(
			"route" => "/",
			"controller" => "indexController.php",
			"action" => "index"
		);

		$route['contatos'] = array(
			"route" => "/contatos",
			"controller" => "indexController",
			"action" => "todosContatos"
		);

		$this->setRoutes($routes);
	}//Vai definir qual será o controlador que entrará em ação e qual será a ação


	public function getUrl(){
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}//Teste para ver a a URL está sendo capturada
}
?>