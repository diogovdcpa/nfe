<?php

namespace app\models;
use app\core\Model;
use \NFePHP\NFe\Make;

class Nfe extends Model{

    public function identificacao($nfe,$identificacao){
       
        $std = new \stdClass();
        $identificacao->cUF = 35;
        $identificacao->cNF = '80070008';
        $identificacao->natOp = 'VENDA';

        $identificacao->indPag = 0; //NÃO EXISTE MAIS NA VERSÃO 4.00

        $identificacao->mod = 55;
        $identificacao->serie = 1;
        $identificacao->nNF = 2;
        $identificacao->dhEmi = '2015-02-19T13:48:00-02:00';
        $identificacao->dhSaiEnt = null;
        $identificacao->tpNF = 1;
        $identificacao->idDest = 1;
        $identificacao->cMunFG = 3518800;
        $identificacao->tpImp = 1;
        $identificacao->tpEmis = 1;
        $identificacao->cDV = 2;
        $identificacao->tpAmb = 2;
        $identificacao->finNFe = 1;
        $identificacao->indFinal = 0;
        $identificacao->indPres = 0;
        $identificacao->procEmi = 0;
        $identificacao->verProc = '3.10.31';
        $identificacao->dhCont = null;
        $identificacao->xJust = null;

        $nfe->tagide($std);

    }

    public function emitente($nfe,$emitente){

        $std = new \stdClass();

        $std->xNome = $emitente->xNome;
        $std->xFant = $emitente->xFant;
        $std->IE    = $emitente->IE;
        $std->IEST  = $emitente->IEST;
        $std->IM    = $emitente->IM;
        $std->CNAE  = $emitente->CNAE;
        $std->CRT   = $emitente->CRT;
        $std->CNPJ  = $emitente->CNPJ; //indicar apenas um CNPJ ou CPF
        $std->CPF   = $emitente->CPF;

        $nfe->tagemit($std);

        $std = new \stdClass();

        $std->xLgr     = $emitente->xLgr;
        $std->nro      = $emitente->nro;
        $std->xCpl     = $emitente->xCpl;
        $std->xBairro  = $emitente->xBairro;
        $std->cMun     = $emitente->cMun;
        $std->xMun     = $emitente->xMun;
        $std->UF       = $emitente->UF;
        $std->CEP      = $emitente->CEP;
        $std->cPais    = $emitente->cPais;
        $std->xPais    = $emitente->xPais;
        $std->fone     = $emitente->fone;

        $nfe->tagenderEmit($std);


    }
    
    public function destinatario($nfe,$destinatario){
        
        $std = new \stdClass();

        $std->xNome          = $destinatario->xNome;
        $std->indIEDest      = $destinatario->indIEDest;
        $std->IE             = $destinatario->IE;
        $std->ISUF           = $destinatario->ISUF;
        $std->IM             = $destinatario->IM;
        $std->email          = $destinatario->email;
        $std->CNPJ           = $destinatario->CNPJ;//indicar apenas um CNPJ ou CPF ou idEstrangeiro
        $std->CPF            = $destinatario->CPF;
        $std->idEstrangeiro  = $destinatario->idEstrangeiro;

        $nfe->tagdest($std);

        $std = new \stdClass();

        $std->xLgr     = $destinatario->xLgr;
        $std->nro      = $destinatario->nro;
        $std->xCpl     = $destinatario->xCpl;
        $std->xBairro  = $destinatario->xBairro;
        $std->cMun     = $destinatario->cMun;
        $std->xMun     = $destinatario->xMun;
        $std->UF       = $destinatario->UF;
        $std->CEP      = $destinatario->CEP;
        $std->cPais    = $destinatario->cPais;
        $std->xPais    = $destinatario->xPais;
        $std->fone     = $destinatario->fone;

        $nfe->tagenderDest($std);

    }

    public function gerarNfe(){
        
        $nfe = new Make();

        $std = new \stdClass();
        $std->versao = '4.00'; //versão do layout (string)
        $std->Id = ''; //se o Id de 44 digitos não for passado será gerado automaticamente
        $std->pk_nItem = null; //deixe essa variavel sempre como NULL
        $nfe->taginfNFe($std);

        $this->identificacao($nfe, $notaFiscal->identificacao);
        $this->emitente($nfe,$notaFiscal->emitente);
        $this->destinatario($nfe, $notaFiscal->destinatario);
        

    }   
    
    
   
}
