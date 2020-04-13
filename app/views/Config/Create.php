<section class="conteudo">			
	<div class="conteudo-fluido">
	<form action="<?php echo URL_BASE ."configuracao/salvar" ?>" method="Post"  >	
		<div class="rows">	
            <div class="col-12">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> NFE</span>
                    </div>
                    <div class="pt-4 px-4 mb-4 width-100 float-left">
                        <div class=" px-5">
                                <span class="d-block mt-4 h4 border-bottom">Configurações da NFE</span>
                                <div class="rows pb-4">
                                               
                                                <div class="col-3 mb-3">
                                                        <label class="text-label">Ambiente</label>	
                                                        <select class="form-campo" name="ambiente">
                                                                <option value="1" <?php echo ($configuracao->ambiente=="1") ? "selected": "" ?>>Produção</option>                                                 
                                                                <option value="2" <?php echo ($configuracao->ambiente=="2") ? "selected": "" ?>>Homologação</option>
                                                        </select>
                                                </div>

                                                <div class="col-1 mb-3">
                                                        <label class="text-label">Série</label>	
                                                        <input type="text" name="serie" value="<?php echo $configuracao->serie ?>" placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                                <div class="col-3 mb-3">
                                                        <label class="text-label">Certificado</label>	
                                                        <input type="text" name="certificado" value="<?php echo $configuracao->certificado ?>"  placeholder="Digite aqui..." class="form-campo">
                                                </div>                                                	

                                                
                                                <div class="col-3 mb-3">
                                                        <label class="text-label">Senha Certificado</label>	
                                                        <input type="password" name="senha" value="<?php echo $configuracao->senha ?>" placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                              
                                                <div class="col-2 mb-3">
                                                        <label class="text-label">Versão:</label>	
                                                        <input type="text" name="versao" value="<?php echo $configuracao->versao ?>" placeholder="Digite aqui..." class="form-campo">
                                                </div>
                                             
											</div>
											<div class="mb-5" style="clear:both">
												<input type="hidden" name="id_config" value="<?php echo (isset($configuracao)) ? $configuracao->id_config : NULL ?>" >
												<input type="submit" value="Salvar" class="btn btn-azul btn-grande d-block m-auto">
											</div>
                        </div>

                      
                </div>
				</div>
			</div>
		</div>
		</form>
	</div>
</section>