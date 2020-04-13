<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Cfop;
class NfeController extends Controller{ 
    
    public function index(){        
       $dados["view"] = "NFE/Index";
       $this->load("template", $dados);
   }

   public function create(){ 
       $objCfop     = new Cfop();
       
       $dados["view"] = "NFE/Create";
       $this->load("template", $dados);
   }
 
}
