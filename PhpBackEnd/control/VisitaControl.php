<?php
include __DIR__.'/../model/Visita.php';

class VisitaControl{
	function insert($obj){		
		$visita = new Visita();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $visita->insert($obj);		
	}

	function update($obj,$id){
		$visita = new Visita();
		return $visita->update($obj,$id);
	}

	function delete($obj,$id){
		$visita = new Visita();
		return $visita->delete($obj,$id);
	}

	function find($id = null){
		$visita = new Visita();
		return $visita->find($id);
	}

	function findAll(){
		$visita = new Visita();
		return $visita->findAll();
	}
}

?>