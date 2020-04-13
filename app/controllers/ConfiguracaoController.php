<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Configuracao;

class ConfiguracaoController extends Controller{ 
    
    public function index(){
       $config = new Configuracao();
       
       $dados["configuracao"] 	= $config->getConfiguracao();
       $dados["view"] 			= "Config/Create";
       $this->load("template", $dados);
   }
   
   
    
   public function salvar(){
       $objConfig = new Configuracao();
	   
	   $configuracao  = new \stdClass();
        
        $configuracao->ambiente      = isset($_POST["ambiente"])? strip_tags(filter_input(INPUT_POST, "ambiente")): NULL;
        $configuracao->serie         = isset($_POST["serie"])? strip_tags(filter_input(INPUT_POST, "serie")): NULL;
        $configuracao->certificado   = isset($_POST["certificado"])? strip_tags(filter_input(INPUT_POST, "certificado")): NULL;
        $configuracao->senha         = isset($_POST["senha"])? strip_tags(filter_input(INPUT_POST, "senha")): NULL;
        $configuracao->versao        = isset($_POST["versao"])? strip_tags(filter_input(INPUT_POST, "versao")): NULL;
        
        $objConfig->editar($configuracao);            
       
        header("location: " . URL_BASE ."configuracao");
       
   }
}
