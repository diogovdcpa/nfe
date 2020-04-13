<?php

namespace app\models;
use app\core\Model;

class Estado extends Model{
    
    public function lista($inicio=null, $lpp=null){
        if($inicio){
            $sql = "SELECT * FROM estado LIMIT $inicio, $lpp";
        }else{
            $sql = "SELECT * FROM estado ";
        }
        
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    

	
    public function getTotal($q=null){
        if($q){
            $sql = "SELECT count(*) as total FROM estado WHERE nome_estado LIKE '%$q%'  ";
        }else{
            $sql = "SELECT count(*) as total FROM estado ";
        }
      
        $qry = $this->db->query($sql);        
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
       
    }
    
    public function filtro($q, $inicio, $lpp){
        $sql = "SELECT * FROM estado WHERE nome_estado LIKE :q LIMIT $inicio, $lpp";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":q", '%' .$q .'%');
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    public function getEstado($id_estado){
        $sql = "SELECT * FROM estado WHERE id_estado = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_estado);
        $qry->execute();
        
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    public function inserir($estado, $ativo){
        $sql = "INSERT INTO estado SET estado =:estado, ativo_estado=:ativo";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":estado", $estado);
        $qry->bindValue(":ativo", $ativo);        
        $qry->execute();
        
        return $this->db->lastInsertId();
        
    }
    
    public function editar($id_estado, $estado, $ativo){
        $sql = "UPDATE estado SET estado =:estado, ativo_estado=:ativo WHERE id_estado =:id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":estado", $estado);
        $qry->bindValue(":ativo", $ativo);        
        $qry->bindValue(":id", $id_estado);        
        $qry->execute();       
        
    }
    
    public function excluir($id_estado){
        $sql = "DELETE FROM estado WHERE id_estado =:id";
        $qry = $this->db->prepare($sql);        
        $qry->bindValue(":id", $id_estado);        
        $qry->execute();       
        
    }
   
}
