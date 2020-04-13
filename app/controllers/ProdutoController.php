<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Produto;
use app\models\Cfop;
use app\models\Unidade;
use app\models\Tributacao;

class ProdutoController extends Controller{ 
    
   public function index(){ 
       $objProduto 	= new Produto();
	   
       $pg  		= isset($_GET["pg"])? $_GET["pg"]: 0;
       $lpp 		= 25;
       $total 		= $objProduto->getTotal(null);
       $inicio 		= $pg*$lpp;     
       
       
       $dados["produtos"]   = $objProduto->lista($inicio, $lpp);
       $dados["url"]        = URL_BASE ."produto/?";
       $dados["pg"]         = $pg;
	   $dados["total"]      = $total;
       $dados["paginas"]    = ceil($total/ $lpp - 1);
       $dados["view"]       = "Produto/Index";
       $this->load("template", $dados);
   } 
   
   public function filtro(){
        $objProduto    	= new Produto();
		
	   
		$pesquisa = new \stdClass();
		
        $pesquisa->q 			= isset($_GET["q"]) ? strip_tags(filter_input(INPUT_GET,"q")): NULL ;	
       
        $pg 					= isset($_GET["pg"]) ? $_GET["pg"]: 0;
        $total   				= $objProduto->getTotal($pesquisa);
        $lpp     				= 25;
        $inicio  				= $pg* $lpp;            
           
        $dados["produtos"] 		= $objProduto->filtro($pesquisa, $inicio, $lpp);
		$dados["categorias"]	= $objCategoria->lista();
        $dados["pg"]         	= $pg;
        $dados["paginas"]    	= ceil($total / $lpp-1);
        $dados["total"]      	= $total;
        $dados["pesquisa"] 	 	= $pesquisa;
        $dados["url"] 			= URL_BASE ."produto/filtro/?q=". $pesquisa->q;
        $dados["view"] 			= "Produto/Index";
        $this->load("template", $dados);
        
   }
   
   public function create(){
       $objUnidade      = new Unidade();
       $objCfop     	= new Cfop();
       $objTributacao  	= new Tributacao();
	   
       $dados["tributacoes"]    = $objTributacao->lista();
       $dados["unidades"]       = $objUnidade->lista();
	   $dados["cfops"]      	= $objCfop->lista();
       $dados["view"]           = "produto/Create";
       $this->load("template", $dados);
   }
   
   public function editar($id_produto){
       $objCfop     	= new Cfop();
       $objUnidade   = new Unidade();
       $objProduto   = new Produto();
		
		$dados["cfops"]      = $objCfop->lista();       
       
       $dados["produto"] 	= $objProduto->getProduto($id_produto);             
       $dados["unidades"]   = $objUnidade->lista();
       $dados["view"] 		= "produto/Create";
       $this->load("template", $dados);
   }
   
   public function delete($id_produto){
       $objUnidade   = new Unidade();
       $objProduto   = new Produto();
       
       $dados["produto"] = $objProduto->getProduto($id_produto);
       
       $dados["categorias"] = $objCategoria->lista();
       $dados["unidades"]   = $objUnidade->lista();
       $dados["view"] = "produto/Show";
       $this->load("template", $dados);
   }
   
   public function excluir($id_produto){
       $objProduto = new Produto();
       $objProduto->excluir($id_produto);
       header("Location:". URL_BASE ."produto");
   }
   public function salvar(){
       $objProduto      = new Produto();
       $id_produto      = isset($_POST["id_produto"]) ? strip_tags(filter_input(INPUT_POST, "id_produto")):NULL;           
     
       
       $valores = (object) array(
           "id_produto"             => $id_produto,
           "id_unidade"             => isset($_POST["id_unidade"]) ? strip_tags(filter_input(INPUT_POST, "id_unidade")):NULL,
           "produto"                => isset($_POST["produto"]) ? strip_tags(filter_input(INPUT_POST, "produto")):NULL,
           "preco"                  => isset($_POST["preco"]) ? strip_tags(filter_input(INPUT_POST, "preco")):NULL,
       
       );       
       
       if($id_produto){
           $objProduto->editar($valores );
       }else{
            $objProduto->inserir($valores);
       }
       
      
       header("Location:". URL_BASE ."produto");
   }
   
  
}
