<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Empresa;
use app\models\Estado;
use app\models\Cidade;

class EmpresaController extends Controller{  
   
   public function index(){
		$objEmpresa     	= new Empresa();
		
		$pesquisa 			= new \stdClass();		
		$pesquisa->nome 	= NULL ;
		
		$pg              	= isset($_GET["pg"]) ? $_GET["pg"]: 0;
		$total           	= $objEmpresa->getTotal($pesquisa);       
		$lpp             	= 20;
		$inicio          	= $pg* $lpp;  
		
       $dados["empresas"] 	= $objEmpresa->filtro($pesquisa, $inicio, $lpp);
       $dados["pg"]         = $pg;
       $dados["paginas"]    = ceil($total / $lpp-1);
       $dados["total"]      = $total;
       $dados["url"] 		= URL_BASE ."empresa/?";
       $dados["view"] 		= "Empresa/Index";
       $this->load("template", $dados);
   } 
   
   public function filtro(){
        $objEmpresa     	= new Empresa();
        
        $pesquisa 			= new \stdClass();		
        $pesquisa->nome 	= isset($_GET["nome"]) ? strip_tags(filter_input(INPUT_GET,"nome")): NULL ;
        
        $pg 				= isset($_GET["pg"]) ? $_GET["pg"]: 0;
        $total   			= $objEmpresa->getTotal($pesquisa);
        $lpp     			= 10;
        $inicio  			= $pg* $lpp;
        $dados["empresas"] 	= $objEmpresa->filtro($pesquisa, $inicio, $lpp); 
	    $dados["pesquisa"] 	= $pesquisa;
        $dados["pg"]        = $pg;
        $dados["paginas"]   = ceil($total / $lpp-1);
        $dados["total"]     = $total;
        $dados["url"] 		= URL_BASE ."empresa/filtro/?nome=". $pesquisa->nome ;
        $dados["view"] 		= "Empresa/Index";
        $this->load("template", $dados);
        
   }
   
   
   public function create(){ 
       $objEstado      = new Estado();
       $objCidade      = new Cidade();
       
       $dados["cidades"] = $objCidade->lista();
       $dados["estados"] = $objEstado->lista();
       $dados["view"] = "Empresa/Create-Edit";
       $this->load("template", $dados);
   }
   public function edit($id_empresa=null){
       $objEstado      = new Estado();
       $objCidade      = new Cidade();
       
       $objEmpresa    = new Empresa();
       if(!$id_empresa){
           header("location:" . URL_BASE ."empresa");
       }else{
          $empresa = $objEmpresa->getEmpresa($id_empresa); 
       }       
       if(!$empresa){
           header("location:" . URL_BASE ."empresa");
       }
       
       $dados["empresa"]  = $empresa;
       $dados["cidades"] = $objCidade->lista();
       $dados["estados"] = $objEstado->lista();
       $dados["view"]       = "empresa/Create-Edit";
       $this->load("template", $dados);
   }
   
   public function delete($id_empresa=null){
       $objEmpresa    = new Empresa();
       if(!$id_empresa){
           header("location:" . URL_BASE ."empresa");
       }else{
          $empresa = $objEmpresa->getEmpresa($id_empresa); 
       }       
       if(!$empresa){
           header("location:" . URL_BASE ."empresa");
       }
       
       $dados["empresa"]  = $empresa;
       $dados["view"]       = "empresa/Show";
       $this->load("template", $dados);
   }
   public function salvar(){
       
       $objEmpresa      = new Empresa(); 
       $id_empresa      = isset($_POST["id_empresa"])? strip_tags(filter_input(INPUT_POST, "id_empresa")) : NULL;
       
       $valores = (object) array(
            "id_empresa"      	=> $id_empresa,
            "razao_social"      => isset($_POST["razao_social"])? strip_tags(filter_input(INPUT_POST, "razao_social")) : NULL,
            "nome_fantasia"     => isset($_POST["nome_fantasia"]) ? strip_tags(filter_input(INPUT_POST,"nome_fantasia")): NULL ,
            "cnpj"              => isset($_POST["cnpj"]) ? strip_tags(filter_input(INPUT_POST,"cnpj")): NULL,
            "ie"                => isset($_POST["ie"]) ? strip_tags(filter_input(INPUT_POST,"ie")): NULL,
            "im"                => isset($_POST["im"]) ? strip_tags(filter_input(INPUT_POST,"im")): NULL,     
            "ddd"               => isset($_POST["ddd"]) ? strip_tags(filter_input(INPUT_POST,"ddd")): NULL,
            "fone"              => isset($_POST["fone"]) ? strip_tags(filter_input(INPUT_POST,"fone")): NULL,
            "celular"           => isset($_POST["celular"]) ? strip_tags(filter_input(INPUT_POST,"celular")): NULL,
            "email"             => isset($_POST["email"]) ? strip_tags(filter_input(INPUT_POST,"email")): NULL,
            "email_secundario"  => isset($_POST["email_secundario"]) ? strip_tags(filter_input(INPUT_POST,"email_secundario")): NULL,
            "email_contabilidade" => isset($_POST["email_contabilidade"]) ? strip_tags(filter_input(INPUT_POST,"email_contabilidade")): NULL,
            "cep"               => isset($_POST["cep"]) ? strip_tags(filter_input(INPUT_POST,"cep")): NULL,
            "logradouro"        => isset($_POST["logradouro"]) ? strip_tags(filter_input(INPUT_POST,"logradouro")): NULL,
            "numero"            => isset($_POST["numero"]) ? strip_tags(filter_input(INPUT_POST,"numero")): NULL,
            "complemento"       => isset($_POST["complemento"]) ? strip_tags(filter_input(INPUT_POST,"complemento")): NULL,
            "bairro"            => isset($_POST["bairro"]) ? strip_tags(filter_input(INPUT_POST,"bairro")): NULL,
            "id_estado"         => isset($_POST["id_estado"]) ? strip_tags(filter_input(INPUT_POST,"id_estado")): NULL,
            "id_cidade"         => isset($_POST["id_cidade"]) ? strip_tags(filter_input(INPUT_POST,"id_cidade")): NULL,
            "cnae"              => isset($_POST["cnae"]) ? strip_tags(filter_input(INPUT_POST,"cnae")): NULL,
            "regime_tributario"   => isset($_POST["regime_tributario"]) ? strip_tags(filter_input(INPUT_POST,"regime_tributario")): NULL,
     );
       
       if($id_empresa){
           $objEmpresa->editar($valores);
       }else{
            $foi = $objEmpresa->inserir($valores);
       }
       header("location:" . URL_BASE ."empresa");
    }
    
    public function excluir($id_empresa=null){
       $objEmpresa    = new Empresa();
       if(!$id_empresa){
           header("location:" . URL_BASE ."empresa");
       }else{
          $empresa = $objEmpresa->getEmpresa($id_empresa); 
       }       
       if(!$empresa){
           header("location:" . URL_BASE ."empresa");
       }
       
       $objEmpresa->excluir($id_empresa);
        header("location:" . URL_BASE ."empresa");
   }
 }
 
 
 
   