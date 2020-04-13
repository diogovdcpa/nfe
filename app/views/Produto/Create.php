<section class="conteudo">			
	<div class="conteudo-fluido">
		<div class="rows">	
			<div class="col-12">
				<div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
							<span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> CADASTRAR NOVO PRODUTO</span>
							<a href="<?php echo URL_BASE ?>Produto" class="btn btn-amarelo float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
					</div>
					<div class="p-5 pt-4 pb-5 width-100 d-inline-block">
					<div class="tab-content	current border-top">
					<span class="d-block mt-4 h4 border-bottom">Produto</span>
                         <div class="rows">
                                <div class="col-6">
                                        <label class="text-label">Titulo do produto</label>
                                        <input type="text" value="<?php echo isset($produto) ? $produto->produto: "" ?>" name="produto" placeholder="Digite aqui..." class="form-campo">
                                </div>
                              
                                <div class="col-4">
                                        <label class="text-label">Unidade</label>
                                        <select class="form-campo" name="id_unidade">
                                            <?php foreach($unidades as $unidade){
                                                    $selecionado = (!isset($produto)) ? "" : ($produto->id_unidade==$unidade->id_unidade) ? "selected" : "";
                                                echo "<option value='$unidade->id_unidade' $selecionado > $unidade->unidade</option>";
                                            } ?>                                        
										</select>
                                </div>
                               
                               
                                <div class="col-2">
                                        <label class="text-label">Preço</label>
                                        <input type="text" name="preco" value="<?php echo isset($produto) ? $produto->preco: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                </div>											

                                
                            
                              
                        </div>
				
					<span class="d-block mt-4 h4 border-bottom">Dados Fiscais</span>		
                <div class="rows">   
					<div class="col-4">	
						<span class="text-label">Tributação</span>
						<select class="form-campo" name="id_tributacao">
							<?php foreach($tributacoes as $tributacao) {
                            $selecionado = (!isset($tributacao)) ? "" : ($tributacao->id_tributacao==$produto->id_tributacao) ? "selected" : "";
                            echo "<option value='$tributacao->id_tributacao' $selecionado >$tributacao->tributacao</option>";
                         } ?>  
						</select>                            
					</div>				
					<div class="col-2">	
						<span class="text-label">Exceção tabela IPI</span>
						<select class="form-campo" name="extipi">
							<option value="0" selected="selected"></option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option> 								
						</select>                            
					</div>   
					
					<div class="col-6">	
						<span class="text-label">CFOP</span>
						<select class="form-campo" name="id_cfop">
							<?php foreach($cfops as $cfop) { 
                                $selecionado = (!isset($produto)) ? "" : ($cfop->id_cfop==$produto->id_cfop) ? "selected" : "" ;                           
                                echo "<option value='$cfop->id_cfop' $selecionado >$cfop->codigo_cfop - $cfop->desc_cfop</option>";
                           } ?>                      
						</select>                            
					</div>
					
					<div class="col-3">                        
						<small class="text-label">Referência EAN/GTIN</small>
						<input type="text" value="<?php echo isset($produto) ? $produto->gtin: "" ?>" class="form-campo" name="gtin">
					</div>
               
                 <div class="col-3">
                        <label class="text-label">NCM</label>
                        <input type="text" value="<?php echo isset($produto) ? $produto->ncm: "" ?>" name="ncm" placeholder="Digite aqui..." class="form-campo">
                </div>
                 <div class="col-3">
                        <label class="text-label">Código CEST</label>
                        <input type="text" value="<?php echo isset($produto) ? $produto->cest: "" ?>" name="cest" placeholder="Digite aqui..." class="form-campo">
                </div>
<!--                
                 
-->
                <div class="col-3">	
                    <span class="text-label">Exceção tabela IPI</span>
                    <select class="form-campo" name="extipi" >
                            <option value="0" selected="selected"></option>
                            <?php for($i=1; $i<=8;$i++){
                                $cod ="0".$i; 
                                $selecionado =  (!isset($produto)) ? "" : ($produto->extipi==$cod) ? "selected" : "" ;
                                echo "<option value='$cod' $selecionado>$cod</option>";
                            }?> 
                            
                    </select>                            
                </div>
				<div class="col-3">
                        <label class="text-label">Código Benef. Fiscal na UF</label>
                        <input type="text" value="<?php echo isset($produto) ? $produto->cbenef: "" ?>" name="cbenef" placeholder="Digite aqui..." class="form-campo">
                </div> 
				
                <div class="col-12 mt-4  pb-5">
                    <input type="hidden" name="id_produto" value="<?php echo isset($produto) ? $produto->id_produto: null ?>">
                    <input type="submit" value="Salvar alterações" class="btn btn-verde btn-medio d-block m-auto">
				</div>         
                 
             </div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>