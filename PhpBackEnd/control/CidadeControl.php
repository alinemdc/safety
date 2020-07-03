<?php
include __DIR__.'/../model/Cidade.php';

class CidadeControl{
	function insert($obj){		
		$cidade = new Cidade();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $cidade->insert($obj);		
	}

	function update($obj,$id){
		$cidade = new Cidade();
		return $cidade->update($obj,$id);
	}

	function delete($obj,$id){
		$cidade = new Cidade();
		return $cidade->delete($obj,$id);
	}

	function find($id = null){
		$cidade = new Cidade();
		return $cidade->find($id);
	}

	function findAll(){
		$cidade = new Cidade();
		return $cidade->findAll();
	}
}

?>