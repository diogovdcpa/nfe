<section class="conteudo">	
<form action="<?php echo URL_BASE ."empresa/salvar" ?>" method="Post"  >		
	<div class="conteudo-fluido">
	<div class="rows">	
    <div class="col-12">
        <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Inserir empresa</span>
							<a href="<?php echo URL_BASE?>empresa/index" class="btn btn-amarelo float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                    </div>
				<form action="" method="">
				<div class="p-5 pb-0 pt-4 width-100 float-left">	
                       	
			<div class="tab-content current border-top">
			<span class="d-block mt-4 h4 border-bottom">Informações básicas</span>	
				<div class="rows pb-4">
                       <div class="col-6 mb-3">
                               <label class="text-label">Razão Social</label>	
                               <input type="text" value="<?php echo (isset($empresa)) ?  $empresa->razao_social : NULL ?>" name="razao_social"  placeholder="Digite aqui..." class="form-campo">
                       </div>
                       <div class="col-6 mb-3">
                               <label class="text-label">Nome Fantasia</label>	
                               <input type="text" name="nome_fantasia"  value="<?php echo (isset($empresa)) ?  $empresa->nome_fantasia : NULL ?>" class="form-campo">
                       </div>
					
                       <div class="col-4 mb-3">
                               <label class="text-label">CNPJ</label>	
                               <input type="text" name="cnpj" value="<?php echo (isset($empresa)) ?  $empresa->cnpj : NULL ?>"  placeholder="Digite aqui..." class="form-campo">
                       </div>
                       <div class="col-4 mb-3">
                               <label class="text-label">Insc. Estadual</label>	
                                <input type="text" name="ie"  value="<?php echo (isset($empresa)) ?  $empresa->ie : NULL ?>"  placeholder="Digite aqui..." class="form-campo">
                       </div>
                       <div class="col-4 mb-3">
                               <label class="text-label">Insc. Municipal</label>	
                                <input type="text" name="im" value="<?php echo (isset($empresa)) ?  $empresa->im : NULL ?>"  placeholder="Digite aqui..." class="form-campo">
                       </div>
                      
                       <div class="col-1 mb-3">
                               <label class="text-label">DDD:</label>	
                               <input type="text" name="ddd" value="<?php echo (isset($empresa)) ?  $empresa->ddd : NULL ?>"   placeholder="Digite aqui..." class="form-campo">
                       </div>
                       <div class="col-4 mb-3">
                               <label class="text-label">Fone:</label>	
                               <input type="text" name="fone" value="<?php echo (isset($empresa)) ?  $empresa->fone : NULL ?>"  placeholder="Digite aqui..." class="form-campo">
                       </div>
                       <div class="col-3 mb-3">
                               <label class="text-label">Celular:</label>	
                                <input type="text" name="celular" value="<?php echo (isset($empresa)) ?  $empresa->celular : NULL ?>"  placeholder="Digite aqui..." class="form-campo">
                       </div>                                               
					
                       <div class="col-4 mb-3">
                               <label class="text-label">E-mail</label>	
                               <input type="text" name="email" value="<?php echo (isset($empresa)) ?  $empresa->email : NULL ?>" placeholder="Digite aqui..." class="form-campo">
                       </div>
                       <div class="col-4 mb-3">
                               <label class="text-label">E-mail Secundário</label>	
                               <input type="text" name="email_secundario" value="<?php echo (isset($empresa)) ?  $empresa->email_secundario : NULL ?>" placeholder="Digite aqui..." class="form-campo">
                       </div>
                       <div class="col-4 mb-3">
                               <label class="text-label">E-mail Contabilidade</label>	
                               <input type="text" name="email_contabilidade" value="<?php echo (isset($empresa)) ?  $empresa->email_contabilidade : NULL ?>" placeholder="Digite aqui..." class="form-campo">
                       </div>
                                             
                              
				</div>
		
				<span class="d-block mt-4 h4 border-bottom">Informações básicas</span>	
				<div class="rows pb-4">																					
                    <div class="col-3 mb-3">
                        <label class="text-label">CEP</label>
                         <div class="input-grupo">
                          <input type="text"  name="cep" value="<?php echo (isset($empresa)) ?  $empresa->cep : NULL ?>" placeholder="Digite aqui..." class="form-campo">
                        
                         <div class="input-grupo-append"><button class="btn btn-azul"><i class="fas fa-search"></i></button></div>
                         </div>
                    </div>
                    <div class="col-6 mb-3">
                            <label class="text-label">Logradouro</label>	
                            <input type="text" name="logradouro" value="<?php echo (isset($empresa)) ?  $empresa->logradouro : NULL ?>" placeholder="Digite aqui..." class="form-campo">
                    </div>
                    <div class="col-1 mb-4">
                            <label class="text-label">Numero</label>	
                            <input type="text" name="numero" value="<?php echo (isset($empresa)) ?  $empresa->numero : NULL ?>"  placeholder="Digite aqui..." class="form-campo">
                    </div>
						 
                     <div class="col-2 mb-2">
                                <label class="text-label">UF</label>	
                                <select class="form-campo" name="id_estado">
                                        <option checked="">Selecione</option>
										<?php foreach($estados as $estado){
											$selecionado = (!isset($empresa)) ? "" : ($empresa->id_estado==$estado->id_estado) ? "selected" : "";
										   echo "<option value='$estado->id_estado' $selecionado >$empresa->id_estado - $empresa->id_estado  - $estado->nome_estado</option>";
										}?>                                                      
									</select>
                     </div>

                     <div class="col-4 mb-3">
                             <label class="text-label">Complemento</label>	
                             <input type="text" name="complemento"  value="<?php echo (isset($empresa)) ?  $empresa->complemento : NULL ?>" placeholder="Digite aqui..." class="form-campo">
                     </div>	
                     <div class="col-4 mb-3">
                             <label class="text-label">Bairro</label>	
                             <input type="text" name="bairro" value="<?php echo (isset($empresa)) ?  $empresa->bairro : NULL ?>" placeholder="Digite aqui..." class="form-campo">
                     </div>	
                     <div class="col-4 mb-2">
                             <label class="text-label">Cidade</label>	
                             <select class="form-campo" name="id_cidade">
                                     <?php foreach($cidades as $cidade){
										$selecionado = (!isset($empresa)) ? "" : ($empresa->id_cidade==$cidade->id_cidade) ? "selected" : "";
									   echo "<option value='$cidade->id_cidade' $selecionado >$cidade->nome_cidade</option>";
									}?>
							</select>
                     </div>
             </div>
			 <div class="rows pb-4">
				<div class="col-12"><span class="d-block mt-4 h4 border-bottom">Dados Fiscais</span></div>			 
                <div class="col-6 mb-3">
                        <label class="text-label">CNAE</label>	
                        <input type="text" name="cnae" value="<?php echo (isset($empresa)) ?  $empresa->cnae : NULL ?>" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-6 mb-3">
                        <label class="text-label">Regime Tributário</label>	
                         <select class="form-campo" name="regime_tributario">
								<option value="10" <?php echo (!isset($empresa)) ? "": ($empresa->regime_tributario=="10") ? "selected" :""  ?>>Simples Nacional</option> 
								<option value="20" <?php echo (!isset($empresa)) ? "": ($empresa->regime_tributario=="20") ? "selected" :""  ?>>Lucro Presumido</option> 
								<option value="30" <?php echo (!isset($empresa)) ? "": ($empresa->regime_tributario=="30") ? "selected" :""  ?>>Lucro Real</option> 
						</select>
                </div> 
           </div>
		</div>
		
		
			<div class="mb-5 pt-4  text-center" style="clear:both">
                    <input type="hidden" name="id_empresa" value="<?php echo (isset($empresa)) ? $empresa->id_empresa : NULL ?>" >
                    <input type="submit" value="Salvar alterações" class="btn btn-verde btn-grande d-block m-auto">
             </div>
		</form>
		
	</div>
	</div>
	
	</div>	
	</div>	
	</div>
 </form>	
	</section>