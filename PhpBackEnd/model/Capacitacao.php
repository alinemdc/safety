<?php

include __DIR__.'/Conexao.php';

class Capacitacao extends Conexao {
    private $id; 
	private $id_cliente;
    private $data;    
    private $assunto;
    private $lista;
    private $proxima;



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

    public function getAssunto()
    {
        return $this->assunto;
    }


    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

    public function getLista()
    {
        return $this->lista;
    }

  
    public function setLista($lista)
    {
        $this->lista = $lista;

        return $this;
    }

    public function getProxima()
    {
        return $this->proxima;
    }

  
    public function setProxima($proxima)
    {
        $this->proxima = $proxima;

        return $this;
    }


   
    public function insert($obj){    
    	$sql = "INSERT INTO capacitacao (id_cliente,data,assunto,lista,proxima) VALUES (:id_cliente,:data,:assunto,:lista,:proxima)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_cliente', $obj->id_cliente);
        $consulta->bindValue('data', $obj->data);
        $consulta->bindValue('assunto', $obj->assunto);
        $consulta->bindValue('lista', $obj->lista);
        $consulta->bindValue('proxima' , $obj->proxima);
        $consulta->execute();
        return Conexao::lastId(); 

	}

	public function update($obj,$id = null){
		$sql = "UPDATE capacitacao SET  
            lista= :lista,
            proxima= :proxima,
            assunto= :assunto,
        WHERE id = :id ";
        $consulta->bindValue('lista' , $obj->lista);
        $consulta->bindValue('proxima' , $obj->proxima);
        $consulta->bindValue('plano' , $obj->plano);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM capacitacao WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
        return $consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM capacitacao WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
        return $consulta->fetch();
	}

	public function findAll(){
		$sql = "SELECT * FROM capacitacao";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}
 
?>