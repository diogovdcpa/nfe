<?php

namespace app\models;
use app\core\Model;

class Configuracao extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getConfiguracao(){
        $sql= "SELECT * FROM configuracao WHERE id_config = 1 ";
        $qry = $this->db->query($sql);
        
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
	
	public function editar($configuracao){
        $sql = "UPDATE configuracao SET 
						ambiente 	=:ambiente, 
						serie		=:serie,
                        certificado =:certificado, 
						senha 		=:senha, 
						versao 		=:versao
                WHERE id_config = 1 " ;
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":ambiente", $configuracao->ambiente);
        $qry->bindValue(":serie", $configuracao->serie);      
        $qry->bindValue(":certificado", $configuracao->certificado);        
        $qry->bindValue(":senha", $configuracao->senha);        
        $qry->bindValue(":versao", $configuracao->versao);        
        $qry->execute();
    }
    
    public function getProximoNFE(){
        $sql = "SELECT ultimanfe FROM config WHERE id_config = 1";
        $qry = $this->db->query($sql);
        
        $codigo = $qry->fetch(\PDO::FETCH_OBJ)->ultimanfe;
        
        return  str_pad($codigo+1,8, '0', STR_PAD_LEFT) ;
    }
	
	
    
  
}
