<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Cfop;
use app\models\Nfe;
use stdClass;
use app\models\Notafiscal;

class NotafiscalController extends Controller{ 
    public function __construct()
    {
        $this->nota = null;
    }
    
    public function index(){        
       $dados["view"] = "NFE/Index";
       $this->load("template", $dados);
   }

   public function create(){ 
       $objCfop = new Cfop();
       $objNotaFiscal = new Notafiscal();

       $nota = $objNotaFiscal->getNotaNaoFinalizada();
       if(!$nota){
           $id_nota = $objNotaFiscal->novaNota();
           $nota = $objNotaFiscal->getNotaFiscal($id_nota);
       }

       $this->nota = $nota;
       $dados["notafiscal"] = $nota;
       $dados["cfops"] = $objCfop->lista();
       $dados["view"] = "NFE/Create";
       $this->load("template", $dados);
   }

   public function gerarNfe(){
        $objNfe = new Nfe();
        $objNfe->gerarNfe();


        // emitente
        $emitente = new \stdClass();
        $emitente->xNome = $_POST["xNomeEmitente"];
        $emitente->xFant = $_POST["xFantEmitente"];
        $emitente->IE    = $_POST["IEEmitente"];
        $emitente->IEST  = $_POST["IESTEmitente"];
        $emitente->IM    = $_POST["IMEmitente"];
        $emitente->CNAE  = $_POST["CNAEEmitente"];
        $emitente->CRT   = $_POST["CRTEmitente"];
        $emitente->CNPJ  = $_POST["CNPJEmitente"]; //indicar apenas um CNPJ ou CPF
        $emitente->CPF   = $_POST["CPFRementente"];

        // endereço emitente
        $emitente->xLgr  = $_POST["xLgrEmitente"];
        $emitente->nro   = $_POST["nroEmitente"];
        $emitente->xCpl  = $_POST["xCplEmitente"];
        $emitente->xBairro = $_POST["xBairroEmitente"];
        $emitente->cMun  = $_POST["cMunEmitente"];
        $emitente->xMun  = $_POST["xMunEmitente"];
        $emitente->UF    = $_POST["UFEmitente"];
        $emitente->CEP   = $_POST["CEPEmitente"];
        $emitente->cPais = $_POST["cPais"];
        $emitente->xPais = $_POST["Brasil"];
        $emitente->fone  = $_POST["foneEmitente"];

        // destinatario
        $destinatario = new \stdClass();
        $destinatario->xNome = $_POST["xNomeDestinatario"];
        $destinatario->indIEDest = $_POST["indIEDest"];
        $destinatario->IE = $_POST["IEDestinatario"];
        $destinatario->ISUF = $_POST["ISUFDestinatario"];
        $destinatario->IM = $_POST["IMDestinatario"];
        $destinatario->email = $_POST["emailDestinatario"];
        $destinatario->CNPJ = $_POST["CNPJDestinatario"]; //indicar apenas um CNPJ ou CPF ou idEstrangeiro
        $destinatario->CPF = $_POST["CPFRementente"];
        $destinatario->idEstrangeiro = $_POST["idEstrangeiro"];

        // endereço destinatario
        $destinatario->xLgr = $_POST["xLgrDestinatario"];
        $destinatario->nro = $_POST["nroDestinatario"];
        $destinatario->xCpl = $_POST["xCplDestinatario"];
        $destinatario->xBairro = $_POST["xBairroDestinatario"];
        $destinatario->cMun = $_POST["cMunDestinatario"];
        $destinatario->xMun = $_POST["xMunDestinatario"];
        $destinatario->UF = $_POST["UFDestinatario"];
        $destinatario->CEP = $_POST["CEPDestinatario"];
        $destinatario->cPais = "1058";
        $destinatario->xPais = "Brasil";
        $destinatario->fone = $_POST["foneDestinatario"];

        $notaFiscal = new \stdClass();
        $notaFiscal->identificacao = $identificacao;
        $notaFiscal->emitente = $emitente;
        $notaFiscal->emitente = $destinatario;
        $objNfe->gerarNfe($notaFiscal);

   }

   public function salvarIdentificacao(){
        $objNotaFiscal = new Notafiscal();
        $data = isset($_POST["data_emissao_nfe"]) ? $_POST["data_emissao_nfe"] : date("Y-m-d");
        $hora = isset($_POST["hora_emissao_nfe"]) ? $_POST["hora_emissao_nfe"] : date("H-i-s");
        
        $identificacao = new \stdClass();
        $identificacao->cUF      = $_POST["UFEmitente"];
        $identificacao->cNF      = $_POST["cNF"];
        $identificacao->natOp    = $_POST["natOp"];
        $identificacao->indPag   = 0; //NÃO EXISTE MAIS NA VERSÃO 4.00
        $identificacao->mod      = 55;
        $identificacao->serie    = $_POST["serie"];
        $identificacao->nNF      = $_POST["id_nfe"];
        $identificacao->dhEmi    = $data."T".$hora."-03:00";
        $identificacao->dhSaiEnt = $data."T".$hora."-03:00";
        $identificacao->tpNF     = $_POST["tpNF"];
        $identificacao->idDest   = $_POST["idDest"];
        $identificacao->cMunFG   = $_POST["cMunEmitente"];
        $identificacao->tpImp    = 1;
        $identificacao->tpEmis   = 1;
        $identificacao->cDV      = null;
        $identificacao->tpAmb    = $_POST["tpAmb"];
        $identificacao->finNFe   = $_POST["finNFe"];
        $identificacao->indFinal = $_POST["indFinal"];
        $identificacao->indPres  = $_POST["indPres"];
        $identificacao->procEmi  = 0;
        $identificacao->verProc  = $_POST["verProc"];
        $identificacao->dhCont   = null;
        $identificacao->xJust    = null;

        $objNotaFiscal->salvarIdentificacao($this->nota->id_nota,$identificacao);
        
   }

   
 
}
