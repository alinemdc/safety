<?php
include __DIR__.'/../model/Categoria.php';

class CategoriaControl{
	function insert($obj){		
		$categoria = new Categoria();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $categoria->insert($obj);		
	}

	function update($obj,$id){
		$categoria = new Categoria();
		return $categoria->update($obj,$id);
	}

	function delete($obj,$id){
		$categoria = new Categoria();
		return $categoria->delete($obj,$id);
	}

	function find($id = null){
		$categoria = new Categoria();
		return $categoria->find($id);
	}

	function findAll(){
		$categoria = new Categoria();
		return $categoria->findAll();
	}
}

?>