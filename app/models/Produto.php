<?php

namespace app\models;
use app\core\Model;

class Produto extends Model{
    
    public function lista($inicio=null, $lpp=null){
		$complemento = " ";
		if($lpp){
            $complemento = " LIMIT $inicio, $lpp";
        }
		
        $sql = "SELECT * FROM produto  " .$complemento;
        $qry = $this->db->query($sql);
        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }
	
 
    
	public function filtro($pesquisa, $inicio, $lpp){
        $complemento = "";
		$sql = "SELECT * FROM produto  WHERE 1 ";
		if($pesquisa->q){
			$complemento .= " AND produto LIKE '%" .  $pesquisa->q ."%' ";
		}
		
		
		$sql .= $complemento ."  LIMIT $inicio, $lpp";
        
		$qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
	
    public function getTotal($pesquisa){
		$complemento = "";
		$sql = "SELECT count(*) as total FROM  PRODUTO WHERE 1 ";
		if($pesquisa){
			if($pesquisa->q){
				$complemento .= " AND produto LIKE '%" .  $pesquisa->q ."%' ";
			}
		}
        
		
        $qry = $this->db->query($sql . $complemento);
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }
    
    public function getProduto($id_produto){
        $sql = "SELECT * FROM produto p, unidade u where p.id_unidade = u.id_unidade AND  id_produto = :id_produto";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_produto", $id_produto);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    
   
    
    public function editar($valores){
        $sql = "UPDATE produto SET
                id_categoria            = :id_categoria,
                id_unidade              = :id_unidade,
                produto           	=:produto           	,
                imagem           	=:imagem           	,
                codigo_personalizado    =:codigo_personalizado  ,
                preco_alto        	=:preco_alto        	,
                preco           	=:preco             	,
                ativo             	=:ativo  
                WHERE id_produto        =:id_produto
                ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_produto", $valores->id_produto);
        $qry->bindValue(":id_categoria", $valores->id_categoria);
        $qry->bindValue(":id_unidade", $valores->id_unidade);
        $qry->bindValue(":produto", $valores->produto);
        $qry->bindValue(":imagem", $valores->imagem);
        $qry->bindValue(":codigo_personalizado", $valores->codigo_personalizado);
        $qry->bindValue(":preco_alto", $valores->preco_alto);
        $qry->bindValue(":preco", $valores->preco);
        $qry->bindValue(":ativo", $valores->ativo);
        $qry->execute();
        
        return $this->db->lastInsertId();
        
    }
    
    public function inserir($valores){
        $sql = "INSERT INTO produto SET
                id_categoria        = :id_categoria,
                id_unidade          = :id_unidade,
                produto           	=:produto           	,
                imagem           	=:imagem           	,
                codigo_personalizado    =:codigo_personalizado  ,
                preco_alto        	=:preco_alto        	,
                preco           	=:preco             	,
                ativo             	=:ativo  
                ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_categoria", $valores->id_categoria);
        $qry->bindValue(":id_unidade", $valores->id_unidade);
        $qry->bindValue(":produto", $valores->produto);
        $qry->bindValue(":imagem", $valores->imagem);
        $qry->bindValue(":codigo_personalizado", $valores->codigo_personalizado);
        $qry->bindValue(":preco_alto", $valores->preco_alto);
        $qry->bindValue(":preco", $valores->preco);
        $qry->bindValue(":ativo", $valores->ativo);
        $qry->execute();
        
        return $this->db->lastInsertId();
        
    }
    
    public function excluir($id_produto){
        $sql = "DELETE FROM produto WHERE id_produto =:id_produto";
        $qry= $this->db->prepare($sql);
        $qry->bindValue(":id_produto", $id_produto);
        $qry->execute();
    }
    
    public function produtoPorNome($descricao){
       $sql = "SELECT * FROM `produto` WHERE produto like :descricao  ";
       
       $qry = $this->db->prepare($sql);
       $qry->bindValue(":descricao", '%'.$descricao.'%' );
       $qry->execute();
       return $qry->fetchAll(\PDO::FETCH_OBJ);
       
   }
    
}
