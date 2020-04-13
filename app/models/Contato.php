<?php

namespace app\models;
use app\core\Model;

class Contato extends Model{
    
    public function lista($inicio=null, $lpp=null){
        if($lpp){
            $sql = "SELECT * FROM contato c, cidade ci, estado e WHERE 
					c.eh_cliente = 'S'  LIMIT $inicio, $lpp";
        }else{
            $sql = "SELECT * FROM contato c, cidade ci, estado e WHERE 
				c.eh_cliente = 'S'  ";
        }
        
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    
	
	
    public function getTotal($pesquisa=null){
		$complemento = "";
        $sql = "SELECT count(*) as total FROM contato c, cidade ci, estado e WHERE 1  ";
		if($pesquisa){
			if($pesquisa->q){
				$complemento .= " AND nome LIKE '%" .  $pesquisa->q ."%' ";
			}
			if($pesquisa->email){
				$complemento .= " AND email LIKE '%" .  $pesquisa->email ."%' ";
			}
			
			if($pesquisa->eh_cliente){
				$complemento .= " AND eh_cliente = 'S' " ;
			}
			
			if($pesquisa->eh_fornecedor){
				$complemento .= " AND eh_fornecedor = 'S' " ;
			}
			
			if($pesquisa->eh_transportador){
				$complemento .= " AND eh_transportador = 'S' " ;
			}	
		}
		$qry = $this->db->query($sql . $complemento);        
        return $qry->fetch(\PDO::FETCH_OBJ)->total;
       
    }
    
    public function filtro($pesquisa, $inicio, $lpp){
		$complemento = "";
		$sql = "SELECT * FROM contato c, cidade ci, estado e WHERE c.id_cidade = ci.id_cidade AND c.id_estado = e.id_estado ";
		if($pesquisa->q){
			$complemento .= " AND nome LIKE '%" .  $pesquisa->q ."%' ";
		}
		if($pesquisa->email){
			$complemento .= " AND email LIKE '%" .  $pesquisa->email ."%' ";
		}
		
		if($pesquisa->eh_cliente){
			$complemento .= " AND eh_cliente = 'S' " ;
		}
		
		if($pesquisa->eh_fornecedor){
			$complemento .= " AND eh_fornecedor = 'S' " ;
		}
		
		if($pesquisa->eh_transportador){
			$complemento .= " AND eh_transportador = 'S' " ;
		}		
		
		$sql .= $complemento ."  LIMIT $inicio, $lpp";
		
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
    public function getContato($id_contato){
        $sql = "SELECT * FROM contato c, cidade cid, estado e WHERE c.id_cidade = cid.id_cidade AND c.id_estado= e.id_estado and  id_contato = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_contato);
        $qry->execute();
        
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    public function inserir($valores){        
        $sql = "INSERT INTO contato SET 
            eh_cliente        =:eh_cliente     ,
            eh_fornecedor     =:eh_fornecedor  ,
            eh_transportador  =:eh_transportador,
            nome              =:nome       ,
            nome_fantasia     =:nome_fantasia  ,
            cpf               =:cpf            ,
            cnpj              =:cnpj           ,
            data_cadastro     =:data_cadastro  ,
            email             =:email          ,
            senha             =:senha          ,
            ddd               =:ddd            ,
            fone              =:fone           ,
            celular           =:celular        ,
            cep               =:cep            ,
            logradouto        =:logradouto     ,
            numero            =:numero         ,
            complemento       =:complemento    ,
            bairro            =:bairro         ,
            id_estado         =:id_estado      ,
            id_cidade         =:id_cidade      ,
            ie                =:ie             ,
            im                =:im             ,
            suframa           =:suframa        ,
            ie_subt_trib      =:ie_subt_trib   ,
            cod_estrangeiro   =:cod_estrangeiro";
        
        
            $qry = $this->db->prepare($sql);
            $qry->bindValue(":eh_cliente"       , $valores->eh_cliente);
            $qry->bindValue(":eh_fornecedor"    , $valores->eh_fornecedor);
            $qry->bindValue(":eh_transportador" , $valores->eh_transportador);
            $qry->bindValue(":nome"          , $valores->nome);
            $qry->bindValue(":nome_fantasia"    , $valores->nome_fantasia);
            $qry->bindValue(":cpf"              , $valores->cpf);
            $qry->bindValue(":cnpj"             , $valores->cnpj);
            $qry->bindValue(":data_cadastro"    , $valores->data_cadastro);
            $qry->bindValue(":email"            , $valores->email);
            $qry->bindValue(":senha"            , $valores->senha);
            $qry->bindValue(":ddd"              , $valores->ddd);
            $qry->bindValue(":fone"             , $valores->fone);
            $qry->bindValue(":celular"          , $valores->celular);
            $qry->bindValue(":cep"              , $valores->cep);
            $qry->bindValue(":logradouto"       , $valores->logradouto);
            $qry->bindValue(":numero"           , $valores->numero);
            $qry->bindValue(":complemento"      , $valores->complemento);
            $qry->bindValue(":bairro"           , $valores->bairro);
            $qry->bindValue(":id_estado"        , $valores->id_estado);
            $qry->bindValue(":id_cidade"        , $valores->id_cidade);
            $qry->bindValue(":ie"               , $valores->ie);
            $qry->bindValue(":im"               , $valores->im);
            $qry->bindValue(":suframa"          , $valores->suframa);
            $qry->bindValue(":ie_subt_trib"     , $valores->ie_subt_trib);
            $qry->bindValue(":cod_estrangeiro"  , $valores->cod_estrangeiro);         
        $qry->execute();
        
        return $this->db->lastInsertId();
        
    }
    
    public function editar($valores){
        $sql = "UPDATE contato SET  
            eh_cliente        =:eh_cliente     ,
            eh_fornecedor     =:eh_fornecedor  ,
            eh_transportador  =:eh_transportador,
            nome              =:nome       ,
            nome_fantasia     =:nome_fantasia  ,
            cpf               =:cpf            ,
            cnpj              =:cnpj           ,
            data_cadastro     =:data_cadastro  ,
            email             =:email          ,
            senha             =:senha          ,
            ddd               =:ddd            ,
            fone              =:fone           ,
            celular           =:celular        ,
            cep               =:cep            ,
            logradouto        =:logradouto     ,
            numero            =:numero         ,
            complemento       =:complemento    ,
            bairro            =:bairro         ,
            id_estado         =:id_estado      ,
            id_cidade         =:id_cidade      ,
            ie                =:ie             ,
            im                =:im             ,
            suframa           =:suframa        ,
            ie_subt_trib      =:ie_subt_trib   ,
            cod_estrangeiro   =:cod_estrangeiro
            WHERE id_contato =:id_contato";
        
        
            $qry = $this->db->prepare($sql);
            $qry->bindValue(":id_contato"       , $valores->id_contato);
            $qry->bindValue(":eh_cliente"       , $valores->eh_cliente);
            $qry->bindValue(":eh_fornecedor"    , $valores->eh_fornecedor);
            $qry->bindValue(":eh_transportador" , $valores->eh_transportador);
            $qry->bindValue(":nome"             , $valores->nome);
            $qry->bindValue(":nome_fantasia"    , $valores->nome_fantasia);
            $qry->bindValue(":cpf"              , $valores->cpf);
            $qry->bindValue(":cnpj"             , $valores->cnpj);
            $qry->bindValue(":data_cadastro"    , $valores->data_cadastro);
            $qry->bindValue(":email"            , $valores->email);
            $qry->bindValue(":senha"            , $valores->senha);
            $qry->bindValue(":ddd"              , $valores->ddd);
            $qry->bindValue(":fone"             , $valores->fone);
            $qry->bindValue(":celular"          , $valores->celular);
            $qry->bindValue(":cep"              , $valores->cep);
            $qry->bindValue(":logradouto"       , $valores->logradouto);
            $qry->bindValue(":numero"           , $valores->numero);
            $qry->bindValue(":complemento"      , $valores->complemento);
            $qry->bindValue(":bairro"           , $valores->bairro);
            $qry->bindValue(":id_estado"        , $valores->id_estado);
            $qry->bindValue(":id_cidade"        , $valores->id_cidade);
            $qry->bindValue(":ie"               , $valores->ie);
            $qry->bindValue(":im"               , $valores->im);
            $qry->bindValue(":suframa"          , $valores->suframa);
            $qry->bindValue(":ie_subt_trib"     , $valores->ie_subt_trib);
            $qry->bindValue(":cod_estrangeiro"  , $valores->cod_estrangeiro);         
        $qry->execute();     
        
    }
    
    public function excluir($id_contato){
        $sql = "DELETE FROM contato WHERE id_contato =:id";
        $qry = $this->db->prepare($sql);        
        $qry->bindValue(":id", $id_contato);        
        $qry->execute();       
        
    }
}
