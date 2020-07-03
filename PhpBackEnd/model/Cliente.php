<?php

include __DIR__.'/Conexao.php';

class Cliente extends Conexao {
    private $id; 
	private $nome;
    private $razaoSocial;    
    private $cnpj;
    private $email;
    private $telefone;
    private $celular;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $id_cidade;
    private $id_categoria;

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

  
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }


    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

  
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

  
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getCelular()
    {
        return $this->celular;
    }

 
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

  
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

   
    public function getComplemento()
    {
        return $this->complemento;
    }

  
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

  
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

 
    public function getId_cidade()
    {
        return $this->id_cidade;
    }

    public function setId_cidade($id_cidade)
    {
        $this->id_cidade = $id_cidade;

        return $this;
    }

    public function getId_categoria()
    {
        return $this->id_categoria;
    }

    public function setId_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;

        return $this;
    }


   
    public function insert($obj){    
    	$sql = "INSERT INTO cliente (nome,razaoSocial,cnpj,email,telefone,celular,endereco,numero,complemento,bairro,id_cidade,id_categoria) VALUES (:nome,:razaoSocial,:cnpj,:email,:telefone,:celular,:endereco,:numero,:complemento,:bairro,:id_cidade, :id_categoria)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('razaoSocial', $obj->razaoSocial);
        $consulta->bindValue('cnpj', $obj->cnpj);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('telefone' , $obj->telefone);
        $consulta->bindValue('celular', $obj->celular);
        $consulta->bindValue('endereco', $obj->endereco);
        $consulta->bindValue('numero', $obj->numero);
        $consulta->bindValue('complemento' , $obj->complemento);
        $consulta->bindValue('bairro', $obj->bairro);
        $consulta->bindValue('id_cidade', $obj->id_cidade);
        $consulta->bindValue('id_categoria', $obj->id_categoria);
        $consulta->execute();
        return Conexao::lastId(); 

	}

	public function update($obj,$id = null){
		$sql = "UPDATE cliente SET  
            email= :email,
            telefone= :telefone,
            celular= :celular,
        WHERE id = :id ";
        $consulta->bindValue('email' , $obj->email);
        $consulta->bindValue('telefone' , $obj->telefone);
        $consulta->bindValue('celular' , $obj->celular);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM cliente WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
        return $consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM cliente WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
        return $consulta->fetch();
	}

	public function findAll(){
		$sql = "SELECT * FROM cliente";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}
 
?>