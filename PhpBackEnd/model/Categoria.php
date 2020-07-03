<?php

include __DIR__.'/Conexao.php';

class Categoria extends Conexao {
    private $id; 
	private $nome;


    public function getId()
    {
        return $this->id;
    }
 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}


   
    public function insert($obj){    
    	$sql = "INSERT INTO categoria (nome) VALUES (:nome)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
    	$consulta->execute();
        return Conexao::lastId(); /*Aqui vc tem o ID da pessoa, você pode não retornar ele e adicionar uma nova query para inserção e inserir nas duas tabelas ao mesmo tempo se for sempre assim */        
	}

	public function update($obj,$id = null){
		$sql = "UPDATE categoria  SET  
            nome= :nome,
        WHERE id = :id";
        $consulta->bindValue('nome' , $obj->nome);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM categoria  WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
        $consulta->bindValue('id', $id);
		$consulta->execute();
        return $consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM categoria  WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
        return $consulta->fetch();
	}

	public function findAll(){
		$sql = "SELECT * FROM categoria ";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}
    
?>