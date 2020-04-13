<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Contato;
use app\models\Estado;
use app\models\Cidade;

class ContatoController extends Controller{ 
    
   public function index(){
		$objContato     	= new Contato();
		
		$pesquisa 			= new \stdClass();		
		$pesquisa->q 		= NULL ;
		$pesquisa->email 		= NULL ;
		$pesquisa->eh_cliente  	= NULL ;
		$pesquisa->eh_fornecedor  	= NULL ;
		$pesquisa->eh_transportador  	= NULL ;
		
		$pg              	= isset($_GET["pg"]) ? $_GET["pg"]: 0;
		$total           	= $objContato->getTotal($pesquisa);       
		$lpp             	= 20;
		$inicio          	= $pg* $lpp;  
		
       $dados["contatos"] 	= $objContato->filtro($pesquisa, $inicio, $lpp);
       $dados["pg"]         = $pg;
       $dados["paginas"]    = ceil($total / $lpp-1);
       $dados["total"]      = $total;
       $dados["url"] 		= URL_BASE ."contato/?";
       $dados["view"] 		= "Contato/Index";
       $this->load("template", $dados);
   } 
   
   public function filtro(){
        $objContato     	= new Contato();
        
        $pesquisa 			= new \stdClass();		
        $pesquisa->q 		= isset($_GET["q"]) ? strip_tags(filter_input(INPUT_GET,"q")): NULL ;
        $pesquisa->email 	= isset($_GET["email"]) ? strip_tags(filter_input(INPUT_GET,"email")): NULL ;
        $pesquisa->eh_cliente 	= isset($_GET["eh_cliente"]) ? strip_tags(filter_input(INPUT_GET,"eh_cliente")): NULL ;
        $pesquisa->eh_fornecedor 	= isset($_GET["eh_fornecedor"]) ? strip_tags(filter_input(INPUT_GET,"eh_fornecedor")): NULL ;
        $pesquisa->eh_transportador 	= isset($_GET["eh_transportador"]) ? strip_tags(filter_input(INPUT_GET,"eh_transportador")): NULL ;
        
        $pg 				= isset($_GET["pg"]) ? $_GET["pg"]: 0;
        $total   			= $objContato->getTotal($pesquisa);
        $lpp     			= 10;
        $inicio  			= $pg* $lpp;
        $dados["contatos"] 	= $objContato->filtro($pesquisa, $inicio, $lpp); 
	    $dados["pesquisa"] 	= $pesquisa;
        $dados["pg"]        = $pg;
        $dados["paginas"]   = ceil($total / $lpp-1);
        $dados["total"]     = $total;
         $dados["url"] 		= URL_BASE ."contato/filtro/?q=". $pesquisa->q ."&email=" . $pesquisa->email ."&eh_cliente=". $pesquisa->eh_cliente ."&eh_fornecedor=". $pesquisa->eh_fornecedor ."&eh_transportador=". $pesquisa->eh_transportador ;
        $dados["view"] 		= "Contato/Index";
        $this->load("template", $dados);
        
   }
   
   public function create(){ 
       $objEstado      = new Estado();
       $objCidade      = new Cidade();
       
       $dados["cidades"] = $objCidade->lista();
       $dados["estados"] = $objEstado->lista();
       $dados["view"] = "contato/Create-Edit";
       $this->load("template", $dados);
   }
   public function edit($id_contato=null){
        $objContato    = new Contato();
	   $objEstado    = new Estado();
           $objCidade      = new Cidade();
       if(!$id_contato){
           header("location:" . URL_BASE ."contato");
       }else{
          $contato = $objContato->getContato($id_contato); 
       }       
       if(!$contato){
           header("location:" . URL_BASE ."contato");
       }
       
       $dados["contato"]  = $contato;
	$dados["estados"] 	= $objEstado->lista();
        $dados["cidades"] = $objCidade->lista();
       $dados["view"]       = "contato/Create-Edit";
       $this->load("template", $dados);
   }
   
   public function delete($id_contato=null){
       $objContato    = new Contato();
       if(!$id_contato){
           header("location:" . URL_BASE ."contato");
       }else{
          $contato = $objContato->getContato($id_contato); 
       }       
       if(!$contato){
           header("location:" . URL_BASE ."contato");
       }
       
       $dados["contato"]  = $contato;
       $dados["view"]       = "contato/Delete";
       $this->load("template", $dados);
   }
   public function salvar(){
       
       $objContato      = new Contato(); 
       $id_contato      = isset($_POST["id_contato"])? strip_tags(filter_input(INPUT_POST, "id_contato")) : NULL;
       
       $valores = (object) array(
            "id_contato"        => $id_contato,
            "eh_cliente"        => isset($_POST["eh_cliente"])? strip_tags(filter_input(INPUT_POST, "eh_cliente")) : "N",
            "eh_fornecedor"     => isset($_POST["eh_fornecedor"])? strip_tags(filter_input(INPUT_POST, "eh_fornecedor")) : "N",
            "eh_transportador"  => isset($_POST["eh_transportador"])? strip_tags(filter_input(INPUT_POST, "eh_transportador")) : "N",
            "nome"              => isset($_POST["nome"])? strip_tags(filter_input(INPUT_POST, "nome")) : NULL,
            "nome_fantasia"     => isset($_POST["nome_fantasia"]) ? strip_tags(filter_input(INPUT_POST,"nome_fantasia")): NULL ,
            "cpf"               => isset($_POST["cpf"]) ? strip_tags(filter_input(INPUT_POST,"cpf")): NULL ,
            "cnpj"              => isset($_POST["cnpj"]) ? strip_tags(filter_input(INPUT_POST,"cnpj")): NULL,
            "data_cadastro"     => isset($_POST["data_cadastro"]) ? strip_tags(filter_input(INPUT_POST,"data_cadastro")): NULL,
            "email"             => isset($_POST["email"]) ? strip_tags(filter_input(INPUT_POST,"email")): NULL,
            "senha"             => isset($_POST["senha"]) ? strip_tags(filter_input(INPUT_POST,"senha")): NULL,
            "ddd"               => isset($_POST["ddd"]) ? strip_tags(filter_input(INPUT_POST,"ddd")): NULL,
            "fone"              => isset($_POST["fone"]) ? strip_tags(filter_input(INPUT_POST,"fone")): NULL,
            "celular"           => isset($_POST["celular"]) ? strip_tags(filter_input(INPUT_POST,"celular")): NULL,
            "cep"               => isset($_POST["cep"]) ? strip_tags(filter_input(INPUT_POST,"cep")): NULL,
            "logradouto"        => isset($_POST["logradouto"]) ? strip_tags(filter_input(INPUT_POST,"logradouto")): NULL,
            "numero"            => isset($_POST["numero"]) ? strip_tags(filter_input(INPUT_POST,"numero")): NULL,
            "complemento"       => isset($_POST["complemento"]) ? strip_tags(filter_input(INPUT_POST,"complemento")): NULL,
            "bairro"            => isset($_POST["bairro"]) ? strip_tags(filter_input(INPUT_POST,"bairro")): NULL,
            "id_estado"         => isset($_POST["id_estado"]) ? strip_tags(filter_input(INPUT_POST,"id_estado")): NULL,
            "id_cidade"         => isset($_POST["id_cidade"]) ? strip_tags(filter_input(INPUT_POST,"id_cidade")): NULL,
            "ie"                => isset($_POST["ie"]) ? strip_tags(filter_input(INPUT_POST,"ie")): NULL,
            "im"                => isset($_POST["im"]) ? strip_tags(filter_input(INPUT_POST,"im")): NULL,
            "suframa"           => isset($_POST["suframa"]) ? strip_tags(filter_input(INPUT_POST,"suframa")): NULL,
            "cod_estrangeiro"   => isset($_POST["cod_estrangeiro"]) ? strip_tags(filter_input(INPUT_POST,"cod_estrangeiro")): NULL,
            "ie_subt_trib"      => isset($_POST["ie_subt_trib"]) ? strip_tags(filter_input(INPUT_POST,"ie_subt_trib")): NULL,
     );
       
       if($id_contato){
           $objContato->editar($valores);
       }else{
            $foi = $objContato->inserir($valores);
       }
       header("location:" . URL_BASE ."contato");
    }
    
    public function excluir($id_contato=null){
       $objContato    = new Contato();
       if(!$id_contato){
           header("location:" . URL_BASE ."contato");
       }else{
          $contato = $objContato->getContato($id_contato); 
       }       
       if(!$contato){
           header("location:" . URL_BASE ."contato");
       }
       
       $objContato->excluir($id_contato);
        header("location:" . URL_BASE ."contato");
   }
}
