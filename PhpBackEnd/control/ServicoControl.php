<?php
include __DIR__.'/../model/Servico.php';

class ServicoControl{
	function insert($obj){		
		$servico = new Servico();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $servico->insert($obj);		
	}

	function update($obj,$id){
		$servico = new Servico();
		return $servico->update($obj,$id);
	}

	function delete($obj,$id){
		$servico = new Servico();
		return $servico->delete($obj,$id);
	}

	function find($id = null){
		$servico = new Servico();
		return $servico->find($id);
	}

	function findAll(){
		$servico = new Servico();
		return $servico->findAll();
	}
}

?>