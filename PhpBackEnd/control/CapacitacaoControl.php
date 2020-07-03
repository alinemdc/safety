<?php
include __DIR__.'/../model/Capacitacao.php';

class CapacitacaoControl{
	function insert($obj){		
		$capacitacao = new Capacitacao();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $capacitacao->insert($obj);		
	}

	function update($obj,$id){
		$capacitacao = new Capacitacao();
		return $capacitacao->update($obj,$id);
	}

	function delete($obj,$id){
		$capacitacao = new Capacitacao();
		return $capacitacao->delete($obj,$id);
	}

	function find($id = null){
		$capacitacao = new Capacitacao();
		return $capacitacao->find($id);
	}

	function findAll(){
		$capacitacao = new Capacitacao();
		return $capacitacao->findAll();
	}
}

?>