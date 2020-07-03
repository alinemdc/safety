<?php

include __DIR__.'/Conexao.php';

class Cliente_servico extends Conexao {
    private $id_cliente; 
	private $id_servico;


    public function getId_cliente()
    {
        return $this->id_cliente;
    }
 
    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;

        return $this;
    }

	public function getId_servico()
	{
		return $this->id_servico;
	}

	public function setId_servico($id_servico)
	{
		$this->id_servico = $id_servico;

		return $this;
	}

   
    public function insert($obj){    
    	$sql = "INSERT INTO cliente_servico (id_cliente, id_servico) VALUES (:id_cliente,:id_servico)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_cliente' , $obj->id_cliente);
        $consulta->bindValue('id_servico',  $obj->id_servico);
    	$consulta->execute();
        return Conexao::lastId();
	}

	public function update($obj,$id_cliente = null, $id_servico=null){
		$sql = "UPDATE cliente_servico  SET  
            id_cliente = :id_cliente
            id_servico= :id_servico,
        WHERE id_cliente = :id_cliente AND id_servico = :id_servico ";
        $consulta->bindValue('id_cliente' , $obj->id_cliente);
		$consulta->bindValue('id_servico', $id_servico);
		return $consulta->execute();
	}

	public function delete($obj,$id_cliente = null, $id_servico=null){
		$sql =  "DELETE FROM cliente_servico  WHERE id_cliente = :id_cliente AND id_servico = :id_servico ";
		$consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_cliente' , $obj->id_cliente);
		$consulta->bindValue('id_servico', $id_servico);
		$consulta->execute();
        return $consulta->execute();
	}

	public function find($id_cliente = null){
        $sql =  "SELECT * FROM cliente_servico  WHERE id_cliente = :id_cliente";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_cliente',$id_cliente);
        $consulta->execute();
        return $consulta->fetch();
	}

	public function findAll(){
		$sql = "SELECT * FROM cliente_servico ";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}  
?>