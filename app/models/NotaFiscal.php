<?php

namespace app\models;
use app\core\Model;

class NotaFiscal extends Model{
    
    public function lista(){
        $sql = "SELECT * FROM cfop ";      
        
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }   
    
    public function getNotaFiscal($id_nota){
        $sql = "SELECT * FROM nfe WHERE id_nfe = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_nota);
        $qry->execute();
        
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function getNotaNaoFinalizada(){
        $sql = "SELECT * FROM nfe WHERE finalizado = 'N'";
        $qry = $this->db->query($sql);
        
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function novaNota(){
        $sql = "INSERT INTO nfe SET finalizado = 'N'";
        $qry = $this->db->query($sql);
        
        return $this->db->lastInsertId();
    }

    public function salvarIdentificacao($id_nota,$identificacao){
        $sql = "UPDATE nfe SET
            cuf = :cuf,
            cnf = :cnf,
            natop = :natop,
            modelo= :modelo,
            serie = :serie,
            nnf = :nnf,
            dhemi = :dhemi,
            dhsaient = :dhsaient,
            tpnf = :tpnf,
            indest = :indest,
            cmunfg = :cmunfg,
            tpimp = :tpimp,
            tpemis = :tpemis,
            cdv = :cdv,
            tpamb = :tpamb,
            finnfe = :finnfe,
            indfinal = :indfinal,
            indpres = :indpres,
            procemi = :procemi,
            verproc = :verproc,
            dhcont = :dhcont,
            xjust = :xjust,

            where id_nfe = :id_nfe
        ";

        $qry = $this->db->prepare($sql);
        
        $qry->bindValue(":id_nfe",$id_nota);
        $qry->bindValue(":cuf",$identificacao->cUF);
        $qry->bindValue(":cnf",$identificacao->cNF);
        $qry->bindValue(":natop",$identificacao->natOp);
        $qry->bindValue(":modelo",$identificacao->mod);
        $qry->bindValue(":serie",$identificacao->serie);
        $qry->bindValue(":nNF",$identificacao->nNf);
        $qry->bindValue(":dhemi",$identificacao->dhEmi);
        $qry->bindValue(":dhsaient",$identificacao->dhSaiEnt);
        $qry->bindValue(":tpnf",$identificacao->tpNF);
        $qry->bindValue(":indest",$identificacao->idDest);
        $qry->bindValue(":cmunfg",$identificacao->cMunFG);
        $qry->bindValue(":tpimp",$identificacao->tpImp);
        $qry->bindValue(":tpemis",$identificacao->tpEmis);
        $qry->bindValue(":cdv",$identificacao->cDV);
        $qry->bindValue(":tpamb",$identificacao->tpAmb);
        $qry->bindValue(":finnfe",$identificacao->finNFe);
        $qry->bindValue(":indfinal",$identificacao->indFinal);
        $qry->bindValue(":indpres",$identificacao->indPres);
        $qry->bindValue(":procemi",$identificacao->procEmi);
        $qry->bindValue(":verproc",$identificacao->verProc);
        $qry->bindValue(":dhcont",$identificacao->dhCont);
        $qry->bindValue(":xjust",$identificacao->xJust);

    }
   
}
