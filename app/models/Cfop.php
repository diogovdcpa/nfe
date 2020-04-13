<?php

namespace app\models;
use app\core\Model;

class Cfop extends Model{
    
    public function lista(){
        $sql = "SELECT * FROM cfop ";      
        
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }   
    
    public function getCfop($id_cfop){
        $sql = "SELECT * FROM cfop WHERE id_cfop = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_cfop);
        $qry->execute();
        
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
   
}
