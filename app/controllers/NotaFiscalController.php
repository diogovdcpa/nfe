<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Cfop;
use app\models\Nfe;
use stdClass;

class NotafiscalController extends Controller{ 
    
    public function index(){        
       $dados["view"] = "NFE/Index";
       $this->load("template", $dados);
   }

   public function create(){ 
       $objCfop     = new Cfop();
       
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
    $notaFiscal->identificacao = $identificaca;
    $notaFiscal->emitente = $emitente;
    $notaFiscal->emitente = $destinatario;
    $objNfe->gerarNfe($notaFiscal);

   }

   
 
}
