<?php

namespace app\models;
use app\core\Model;

class Cidade extends Model{
    
    public function lista($inicio=null, $lpp=null){
		if($lpp){
			$sql = "SELECT * FROM cidade c, estado e WHERE c.id_estado = e.id_estado  LIMIT $inicio, $lpp ";
		}else{
			$sql = "SELECT * FROM cidade c, estado e WHERE c.id_estado = e.id_estado   ";
		}
        $qry = $this->db->query($sql);
        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }
	
	public function listaCidadePorIdEstado($id_estado){
		$sql = "SELECT * FROM cidade  WHERE id_estado = $id_estado ORDER BY nome_cidade ";
		
        $qry = $this->db->query($sql);
        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }
	
	public function listaInsumo(){
        $sql = "SELECT * FROM cidade WHERE eh_insumo ='S' ";
        $qry = $this->db->query($sql);
        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }
    
	public function filtro($pesquisa, $inicio, $lpp){
        $complemento = "";
		$sql = "SELECT * FROM cidade c, estado e WHERE c.id_estado = e.id_estado ";
		if($pesquisa->q){
			$complemento .= " AND nome_cidade LIKE '%" .  $pesquisa->q ."%' ";
		}
		if($pesquisa->estado){
			$complemento .= " AND c.id_estado = " . $pesquisa->estado;
		}
		
		
		$sql .= $complemento ."  LIMIT $inicio, $lpp";
        
		$qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
	
    public function getTotal($pesquisa){
		$complemento = "";
		$sql = "SELECT count(*) as total FROM cidade c, estado e WHERE c.id_estado = e.id_estado ";
		if($pesquisa){
			if($pesquisa->q){
				$complemento .= " AND nome_cidade LIKE '%" .  $pesquisa->q ."%' ";
			}
			if($pesquisa->estado){
				$complemento .= " AND c.id_estado = " . $pesquisa->estado;
			}
		}
        
		
        $qry = $this->db->query($sql . $complemento);
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }
    
    public function getCidade($id_cidade){
        $sql = "SELECT * FROM cidade p, unidade u where p.id_unidade = u.id_unidade AND  id_cidade = :id_cidade";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cidade", $id_cidade);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    
    public function getVerEstoque($id_cidade){
        $sql = "SELECT * FROM cidade  where id_cidade = :id_cidade";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cidade", $id_cidade);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ)->estoque_atual;
    }
    
    public function editar($valores){
        $sql = "UPDATE cidade SET
                id_categoria            = :id_categoria,
                id_unidade              = :id_unidade,
                cidade           	=:cidade           	,
                imagem           	=:imagem           	,
                codigo_personalizado    =:codigo_personalizado  ,
                preco_alto        	=:preco_alto        	,
                preco           	=:preco             	,
                ativo             	=:ativo  
                WHERE id_cidade        =:id_cidade
                ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cidade", $valores->id_cidade);
        $qry->bindValue(":id_categoria", $valores->id_categoria);
        $qry->bindValue(":id_unidade", $valores->id_unidade);
        $qry->bindValue(":cidade", $valores->cidade);
        $qry->bindValue(":imagem", $valores->imagem);
        $qry->bindValue(":codigo_personalizado", $valores->codigo_personalizado);
        $qry->bindValue(":preco_alto", $valores->preco_alto);
        $qry->bindValue(":preco", $valores->preco);
        $qry->bindValue(":ativo", $valores->ativo);
        $qry->execute();
        
        return $this->db->lastInsertId();
        
    }
    
    public function inserir($valores){
        $sql = "INSERT INTO cidade SET
                id_categoria        = :id_categoria,
                id_unidade          = :id_unidade,
                cidade           	=:cidade           	,
                imagem           	=:imagem           	,
                codigo_personalizado    =:codigo_personalizado  ,
                preco_alto        	=:preco_alto        	,
                preco           	=:preco             	,
                ativo             	=:ativo  
                ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_categoria", $valores->id_categoria);
        $qry->bindValue(":id_unidade", $valores->id_unidade);
        $qry->bindValue(":cidade", $valores->cidade);
        $qry->bindValue(":imagem", $valores->imagem);
        $qry->bindValue(":codigo_personalizado", $valores->codigo_personalizado);
        $qry->bindValue(":preco_alto", $valores->preco_alto);
        $qry->bindValue(":preco", $valores->preco);
        $qry->bindValue(":ativo", $valores->ativo);
        $qry->execute();
        
        return $this->db->lastInsertId();
        
    }
    
    public function excluir($id_cidade){
        $sql = "DELETE FROM cidade WHERE id_cidade =:id_cidade";
        $qry= $this->db->prepare($sql);
        $qry->bindValue(":id_cidade", $id_cidade);
        $qry->execute();
    }
    
    public function cidadePorNome($descricao){
       $sql = "SELECT * FROM `cidade` WHERE cidade like :descricao  ";
       
       $qry = $this->db->prepare($sql);
       $qry->bindValue(":descricao", '%'.$descricao.'%' );
       $qry->execute();
       return $qry->fetchAll(\PDO::FETCH_OBJ);
       
   }
   
}
