<?php
include __DIR__.'/../model/Cliente_servico.php';

class Cliente_servicoControl{
	function insert($obj){		
		$cliente_servico = new Cliente_servico();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $cliente_servico->insert($obj);		
	}

	function update($obj,$id){
		$cliente_servico = new Cliente_servico();
		return $cliente_servico->update($obj,$id);
	}

	function delete($obj,$id){
		$cliente_servico = new Cliente_servico();
		return $cliente_servico->delete($obj,$id);
	}

	function find($id = null){
		$cliente_servico = new Cliente_servico();
		return $cliente_servico->find($id);
	}

	function findAll(){
		$cliente_servico = new Cliente_servico();
		return $cliente_servico->findAll();
	}
}

?>