<?php

namespace App\Controllers;

use  MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action {

	public function index() {

		//$this->view->dados = array('sofá', 'cadeira', 'cama');
		
		//Intancia de conexao
		$conn = Connection::getDb();	
		//Instanciar o modelo
		$produto = new Produto($conn);


		$produtos = $produto->getProdutos();
		$this->view->dados = $produtos;

		$this->render('index' , 'layout1');
	}

	public function contatos() {
		//$this->view->dados = array('faca', 'celular', 'pc');
		$this->render('contatos', 'layout1');
	}

}


?>