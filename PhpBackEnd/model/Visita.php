<?php

include __DIR__.'/Conexao.php';

class Visita extends Conexao {
    private $id; 
	private $id_cliente;
    private $data;    
    private $avaliacao;
    private $responsavel;
    private $relatorio;
    private $plano;


    public function getId()
    {
        return $this->id;
    }
 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

	public function getId_cliente()
	{
		return $this->id_cliente;
	}

	public function setId_cliente($id_cliente)
	{
		$this->id_cliente = $id_cliente;

		return $this;
	}

  
    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }


    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;

        return $this;
    }

    public function getResponsavel()
    {
        return $this->responsavel;
    }

  
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    public function getRelatorio()
    {
        return $this->relatorio;
    }

  
    public function setRelatorio($relatorio)
    {
        $this->relatorio = $relatorio;

        return $this;
    }

    public function getPlano()
    {
        return $this->plano;
    }

 
    public function setPlano($plano)
    {
        $this->plano = $plano;

        return $this;
    }



   
    public function insert($obj){    
    	$sql = "INSERT INTO visita (id_cliente,data,avaliacao,responsavel,relatorio,plano) VALUES (:id_cliente,:data,:avaliacao,:responsavel,:relatorio,:plano)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_cliente', $obj->id_cliente);
        $consulta->bindValue('data', $obj->data);
        $consulta->bindValue('avaliacao', $obj->avaliacao);
        $consulta->bindValue('responsavel', $obj->responsavel);
        $consulta->bindValue('relatorio' , $obj->relatorio);
        $consulta->bindValue('plano', $obj->plano);
        $consulta->execute();
        return Conexao::lastId(); 

	}

	public function update($obj,$id = null){
		$sql = "UPDATE visita SET  
            responsavel= :responsavel,
            relatorio= :relatorio,
            plano= :plano,
        WHERE id = :id ";
        $consulta->bindValue('responsavel' , $obj->responsavel);
        $consulta->bindValue('relatorio' , $obj->relatorio);
        $consulta->bindValue('plano' , $obj->plano);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM visita WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
        return $consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM visita WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
        return $consulta->fetch();
	}

	public function findAll(){
		$sql = "SELECT * FROM visita";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}
 
?>