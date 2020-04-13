<?php

namespace app\models;
use app\core\Model;

class Empresa extends Model{
    
    public function lista($inicio=null, $lpp=null){
        if($inicio){
            $sql = "SELECT * FROM empresa LIMIT $inicio, $lpp";
        }else{
            $sql = "SELECT * FROM empresa ";
        }
        
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    
    public function filtro($pesquisa, $inicio, $lpp){
        $complemento = "";
		$sql = "SELECT * FROM empresa WHERE 1 ";
		if($pesquisa->nome){
			$complemento .= " AND nome_fantasia LIKE '%" .  $pesquisa->nome ."%' ";		}		
		
		$sql .= $complemento ."  LIMIT $inicio, $lpp";        
		$qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
	
    public function getTotal($pesquisa){
		$complemento = "";
		$sql = "SELECT count(*) as total FROM empresa  WHERE 1 ";
		if($pesquisa){
			if($pesquisa->nome){
				$complemento .= " AND nome_fantasia LIKE '%" .  $pesquisa->nome ."%' ";
			}			
		}        
		
        $qry = $this->db->query($sql . $complemento);
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
    }
    public function getEmpresa($id_empresa){
        $sql = "SELECT * FROM empresa WHERE id_empresa = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_empresa);
        $qry->execute();
        
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    public function inserir($valores){  
       
        $sql = "INSERT INTO empresa SET 
            razao_social      =:razao_social       ,
            nome_fantasia     =:nome_fantasia  ,
            cnpj              =:cnpj           ,
            email             =:email          ,
            email_secundario  =:email_secundario  ,
            email_contabilidade =:email_contabilidade  ,
            ddd               =:ddd            ,
            fone              =:fone           ,
            celular           =:celular        ,
            cep               =:cep            ,
            logradouro        =:logradouro     ,
            numero            =:numero         ,
            complemento       =:complemento    ,
            bairro            =:bairro         ,
            id_estado         =:id_estado      ,
            id_cidade         =:id_cidade      ,
            ie                =:ie             ,
            im                =:im             ,
            cnae             =:cnae        ,
            regime_tributario =:regime_tributario  ";
        
        
            $qry = $this->db->prepare($sql);
            $qry->bindValue(":razao_social"     , $valores->razao_social);
            $qry->bindValue(":nome_fantasia"    , $valores->nome_fantasia);
            $qry->bindValue(":cnpj"             , $valores->cnpj);
            $qry->bindValue(":email"            , $valores->email);
            $qry->bindValue(":email_secundario" , $valores->email_secundario);
            $qry->bindValue(":email_contabilidade", $valores->email_contabilidade);
            $qry->bindValue(":ddd"              , $valores->ddd);
            $qry->bindValue(":fone"             , $valores->fone);
            $qry->bindValue(":celular"          , $valores->celular);
            $qry->bindValue(":cep"              , $valores->cep);
            $qry->bindValue(":logradouro"       , $valores->logradouro);
            $qry->bindValue(":numero"           , $valores->numero);
            $qry->bindValue(":complemento"      , $valores->complemento);
            $qry->bindValue(":bairro"           , $valores->bairro);
            $qry->bindValue(":id_estado"        , $valores->id_estado);
            $qry->bindValue(":id_cidade"        , $valores->id_cidade);
            $qry->bindValue(":ie"               , $valores->ie);
            $qry->bindValue(":im"               , $valores->im);
            $qry->bindValue(":cnae"             , $valores->cnae);
            $qry->bindValue(":regime_tributario", $valores->regime_tributario);         
        $qry->execute();
        
        return $this->db->lastInsertId();
        
    }
    
    public function editar($valores){
        $sql = "UPDATE empresa SET 
            razao_social      =:razao_social       ,
            nome_fantasia     =:nome_fantasia  ,
            cnpj              =:cnpj           ,
            email             =:email          ,
            email_secundario  =:email_secundario  ,
            email_contabilidade =:email_contabilidade  ,
            ddd               =:ddd            ,
            fone              =:fone           ,
            celular           =:celular        ,
            cep               =:cep            ,
            logradouro        =:logradouro     ,
            numero            =:numero         ,
            complemento       =:complemento    ,
            bairro            =:bairro         ,
            id_estado         =:id_estado      ,
            id_cidade         =:id_cidade      ,
            ie                =:ie             ,
            im                =:im             ,
            cnae             =:cnae        ,
            regime_tributario =:regime_tributario
			WHERE id_empresa = :id_empresa
			";
        
        
            $qry = $this->db->prepare($sql);
            $qry->bindValue(":id_empresa"     	, $valores->id_empresa);
            $qry->bindValue(":razao_social"     , $valores->razao_social);
            $qry->bindValue(":nome_fantasia"    , $valores->nome_fantasia);
            $qry->bindValue(":cnpj"             , $valores->cnpj);
            $qry->bindValue(":email"            , $valores->email);
            $qry->bindValue(":email_secundario" , $valores->email_secundario);
            $qry->bindValue(":email_contabilidade", $valores->email_contabilidade);
            $qry->bindValue(":ddd"              , $valores->ddd);
            $qry->bindValue(":fone"             , $valores->fone);
            $qry->bindValue(":celular"          , $valores->celular);
            $qry->bindValue(":cep"              , $valores->cep);
            $qry->bindValue(":logradouro"       , $valores->logradouro);
            $qry->bindValue(":numero"           , $valores->numero);
            $qry->bindValue(":complemento"      , $valores->complemento);
            $qry->bindValue(":bairro"           , $valores->bairro);
            $qry->bindValue(":id_estado"        , $valores->id_estado);
            $qry->bindValue(":id_cidade"        , $valores->id_cidade);
            $qry->bindValue(":ie"               , $valores->ie);
            $qry->bindValue(":im"               , $valores->im);
            $qry->bindValue(":cnae"             , $valores->cnae);
            $qry->bindValue(":regime_tributario", $valores->regime_tributario);        
            $qry->execute();       
        
    }
    
    public function excluir($id_empresa){
        $sql = "DELETE FROM empresa WHERE id_empresa =:id";
        $qry = $this->db->prepare($sql);        
        $qry->bindValue(":id", $id_empresa);        
        $qry->execute();       
        
    }
}
