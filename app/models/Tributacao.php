<?php

namespace app\models;
use app\core\Model;

class Tributacao extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function lista(){
        $sql= "SELECT * FROM tributacao";
        $qry = $this->db->query($sql);
        
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    
    public function busca($pesq){
        $sql    = "SELECT * FROM tributacao WHERE tributacao LIKE :tributacao";        
        $qry    = $this->db->prepare($sql);
        $qry->bindValue(":tributacao",'%'. $pesq .'%');
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    
    public function getTributacao($id){
        $sql = "SELECT * FROM tributacao WHERE id_tributacao = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    
    public function inserir($tributacao){
        $sql = "INSERT INTO tributacao SET tributacao =:tributacao ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":tributacao", $tributacao);      
        $qry->execute();
        
        return $this->db->lastInsertId();
    }
    public function editar($id_tributacao, $tributacao, $ativo){
        $sql = "UPDATE tributacao SET tributacao =:tributacao, ativo_tributacao=:ativo
                WHERE id_tributacao = :id_tributacao " ;
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":tributacao", $tributacao);
        $qry->bindValue(":ativo", $ativo);      
        $qry->bindValue(":id_tributacao", $id_tributacao);        
        $qry->execute();
    }
    
    public function excluir($id){
        $sql ="DELETE FROM tributacao WHERE  id_tributacao = :id_tributacao";
        $qry = $this->db->prepare($sql);        
        $qry->bindValue(":id_tributacao", $id);        
        $qry->execute();
    }
}
