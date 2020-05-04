<?php

namespace App\Controllers;

# Importando as classes

//Recursos do mini
use  MF\Controller\Action;
use MF\Model\Container;

//Os models
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {

	public function index() {

		$produto = Container::getModel('Produto');

		$produtos = $produto->getProdutos();
		$this->view->dados = $produtos;

		$this->render('index' , 'layout1');
	}

	public function contatos() {

		$info = Container::getModel('Info');

		$infos = $info->getInfo();
		$this->view->dados = $infos;
		//$this->view->dados = array('faca', 'celular', 'pc');
		$this->render('contatos', 'layout1');
	}

}


?>