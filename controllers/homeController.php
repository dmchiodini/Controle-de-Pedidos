<?php
class homeController extends controller {

	public function index() {
		$dados = array();

		$pedido = new Pedidos();

		$dados['lista'] = $pedido->getAll();

		$this->loadTemplate('home', $dados);

	}

}