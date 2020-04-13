<section class="conteudo">
			<div class="">				
				<div class="conteudo-fluido">
				<div class="rows">	
                <div class="col-12">
		<form action="<?php echo URL_BASE ."nfe/salvar" ?>" method="POST">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Adicionar Nota</span>
                    </div>

                <div class="p-5 pb-0 pt-4 width-100 float-left">	
                         <ul class="tabs">
                                <li class="current" data-tab="tab-1">Dados gerais</li>
                                <li data-tab="tab-2" >Emitente</li>
                                <li data-tab="tab-3" >Destinatário</li>
                                <li data-tab="tab-4" >Produtos</li>
                                <li data-tab="tab-5">Totalizadores</li>
                                <li data-tab="tab-6">Transporte</li>
                                <li data-tab="tab-7">Faturas/duplicatas</li>
                        </ul>		
       
                    
		<div id="tab-1" class="tab-content current">
                <?php include "TabDadosGerais.php" ?>
        </div>		
		
		<div id="tab-2" class="tab-content">									
            <?php include "TabEmitente.php" ?>
		</div>
	

        <div id="tab-3" class="tab-content">									
            <?php include "TabDestinatario.php" ?>
		</div> 
    
		<div id="tab-4" class="tab-content">									
            <?php include "TabProduto.php" ?>
        </div>
                    
		<div id="tab-5" class="tab-content">									
            <?php include "TabTotalizadores.php" ?>			
		</div>

		<div id="tab-6" class="tab-content">		
			<?php include "TabTransporte.php" ?>			   
		</div>  

		<div id="tab-7" class="tab-content">									
			<?php include "TabFatura.php" ?>	
		</div>             
    
                    
</div>

    <div class="d-inline-block width-100 mb-5 mt-4" style="clear:both">
        <input type="hidden" name="id_nfe" value="21">
        <input type="submit" value="Salvar" class="btn btn-azul btn-grande d-block m-auto">
    </div>
    </div>

</form>
    </div>
    </div>
</div>
</div>
</section>

	<div class="window" id="janela1">
		<div class="caixa mb-0">
			<div class="caixa-titulo">
					Informações de duplicatas
			</div>
			<div class="rows p-4">  		
				<div class="col-6 mb-3">
					<label class="text-label">Vencimento</label>	                   
					<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>    		
				<div class="col-6 mb-3">
					<label class="text-label">Valor</label>	                   
					<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>   
			</div>   
			<div class="caixa-rodape text-right">
					<input type="submit" value="Salvar" class="btn d-inline-block">
					<button class="btn btn-vermelho d-inline-block fechar">Fechar</button>
			</div>
		</div>
	</div>
	
	<!--cadastro de produto-->
	<div class="window" id="janela_produto">
		<div class="caixa mb-0">
			<div class="caixa-titulo">
					Cadastrar Produto
			</div>
			<div class="rows p-4">
                <div class="col-12">
                        <label class="text-label">Titulo do produto</label>
                        <input type="text" value="" name="produto" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-4">
                        <label class="text-label">Categoria</label>
                        <select class="form-campo" name="id_categoria">
                             
                            <option value="1"> Panela</option><option value="2"> Cuzcuzeira</option><option value="3"> Copo</option><option value="4"> Caneca</option><option value="5"> Papeiro</option><option value="6"> Leiteira</option><option value="7"> Frigideira</option><option value="8"> Bacia</option><option value="9"> Balde</option><option value="10"> Assadeira</option>                                                
                        </select>
                </div>
                <div class="col-4">
                        <label class="text-label">Código Personalizado</label>
                        <input type="text" name="codigo_personalizado" value="" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-4">
                        <label class="text-label">Unidade</label>
                        <select class="form-campo" name="id_unidade">
                                <option value="1"> Unidade</option><option value="3"> Pacote</option><option value="4"> Kilograma</option>                                        </select>
                </div>
               
                <div class="col-6">
                        <label class="text-label">Upload da imagem</label>
                        <input type="file" name="arquivo" class="form-campo">
                </div>
                <div class="col-6">
                        <label class="text-label">Nome do arquivo</label>
                        <input type="text" value="" name="nome_do_arquivo" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-4">
                        <label class="text-label">Preço Alto</label>
                        <input type="text" name="preco_alto" value="" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-4">
                        <label class="text-label">Preço atual</label>
                        <input type="text" name="preco" value="" placeholder="Digite aqui..." class="form-campo">
                </div>												

                <div class="col-4">
                        <label class="text-label">Ativo</label>
                        <select class="form-campo" name="ativo">
                                <option value="S">Sim</option>                                                 
                                <option value="N">Não</option> 
                        </select>
                </div>
            </div>  
			<div class="caixa-rodape text-right">
					<input type="submit" value="Salvar" class="btn d-inline-block">
					<button class="btn btn-vermelho d-inline-block fechar">Fechar</button>
			</div>
		</div>
	</div>
	
	
	<!--lista de produto-->
	<div class="window" id="janela_listagem">
		<div class="caixa mb-0 p-3">
				<div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="fas fa-search"></i> Buscar produto</span>
                    </div>					
					<form action="" method="">
						<div class="rows p-4">
                                 <div class="col-6">
                                         <label class="text-label">Nome</label>
                                         <input type="text" placeholder="Digite aqui..." class="form-campo">
                                 </div>
                                 <div class="col-4">
                                         <label class="text-label">Opção</label>
                                         <select class="form-campo">
                                                 <option>Opção 01</option>
                                                 <option>Opção 02</option>
                                                 <option>Opção 03</option>
                                         </select>
                                 </div>
								  <div class="col-2 mt-4">
                                       <input type="submit" value="Buscar" class="btn btn-azul text-uppercase width-100">
                                   </div>					
						</div>	
					</form>
				</div>
				<div class="caixa">
						<div class="caixa-titulo py-1 d-inline-block width-100">
								<span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista produtos</span>
						</div>
						
					
						<div class="row">
						<div class="tabela-responsiva rolagem-290">
							<table cellpadding="0" cellspacing="0">
								<thead>
									<tr>
                                        <th align="center">Id</th>
                                        <th align="center" width="20">Imagem</th>
                                        <th align="left">Produto</th>
                                        <th align="center">Preço</th>
                                        <th align="center" colspan="2">Ação</th>
                                    </tr>
								</thead>
								<tbody>                      
									<tr>
                                         <td align="center">8</td>
                                         <td align="center"><img src="http://mjailton.com.br/nfe/v1/upload/PANELA_5.jpg" class="img-fluido radius-circulo opaco" width="40"></td>
                                         <td align="left">Panela 5</td>
                                         <td align="center">100.00</td>
                                         <td align="center">
											<a href="" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-check"></i> Selecionar</a>
                                         </td>
									</tr>                       
									<tr>
                                         <td align="center">8</td>
                                         <td align="center"><img src="http://mjailton.com.br/nfe/v1/upload/PANELA_5.jpg" class="img-fluido radius-circulo opaco" width="40"></td>
                                         <td align="left">Panela 5</td>
                                         <td align="center">100.00</td>
                                         <td align="center">
											<a href="" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-check"></i> Selecionar</a>
                                         </td>
									</tr>                       
									<tr>
                                         <td align="center">8</td>
                                         <td align="center"><img src="http://mjailton.com.br/nfe/v1/upload/PANELA_5.jpg" class="img-fluido radius-circulo opaco" width="40"></td>
                                         <td align="left">Panela 5</td>
                                         <td align="center">100.00</td>
                                         <td align="center">
											<a href="" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-check"></i> Selecionar</a>
                                         </td>
									</tr>                       
									<tr>
                                         <td align="center">8</td>
                                         <td align="center"><img src="http://mjailton.com.br/nfe/v1/upload/PANELA_5.jpg" class="img-fluido radius-circulo opaco" width="40"></td>
                                         <td align="left">Panela 5</td>
                                         <td align="center">100.00</td>
                                         <td align="center">
											<a href="" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-check"></i> Selecionar</a>
                                         </td>
									</tr>                       
									<tr>
                                         <td align="center">8</td>
                                         <td align="center"><img src="http://mjailton.com.br/nfe/v1/upload/PANELA_5.jpg" class="img-fluido radius-circulo opaco" width="40"></td>
                                         <td align="left">Panela 5</td>
                                         <td align="center">100.00</td>
                                         <td align="center">
											<a href="" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-check"></i> Selecionar</a>
                                         </td>
									</tr>   		
								</tbody>
							</table>
									
				</div>
						</div> 
				</div>
		</div>
	</div>
<div id="mascara"></div>