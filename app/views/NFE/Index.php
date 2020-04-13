<section class="conteudo">			
	<div class="conteudo-fluido">
	<div class="rows">	
		<div class="col-12">
			<div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="fas fa-search"></i> Buscar por nota</span>
                    </div>
					
				<form action="" method="">
					<div class="rows p-4 px-5">
							   <div class="col-3">
									<label class="text-label">Nome</label>	
									 <input type="text" value="" name="razao_social" placeholder="Digite aqui..." class="form-campo">
							   </div>
							   <div class="col-3">
										<label class="text-label">Opção</label>
										<select class="form-campo">
												<option>Opção 01</option>
												<option>Opção 02</option>
												<option>Opção 03</option>
										</select>
								</div>
							   <div class="col-4">
									<label class="text-label">Nome</label>	
									 <input type="text" value="" name="razao_social" placeholder="Digite aqui..." class="form-campo">
							   </div>
							   <div class="col-2 mt-4">
									<input type="submit" value="pesquisar" class="btn btn-verde text-uppercase width-100">
								</div>
					</div> 
				</form>
			</div>
        </div>
		
		<div class="col-12">
			<div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista NFE</span>
							<small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-amarelo">20</b> registros</small>
							<a href="<?php echo URL_BASE?>Nfe/create" class="btn btn-amarelo float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
                    </div>
					
				
					<div class="row">
					<div class="tabela-responsiva">
						<table cellpadding="0" cellspacing="0">
                            <thead>
                               <tr>
									<th align="center">Id</th>
									<th align="center">Núm. Nota</th>
									<th align="left" width="300">Cliente</th>
									<th align="center">Status</th>
									<th align="center" colspan="2">Ação</th>
								</tr>
                            </thead>
                            <tbody>                      
								<tr>
                            <td align="center">26</td>
                            <td align="center">00000000</td>
                            <td align="left">Manoel jailton</td>
                            <td align="center"><span class="status">S</span></td>
                            <td align="center"><a href="http://mjailton.com.br/nfe/v1/nfe/gerarNfe/26" class="btn btn-pequeno "><i class="fas" fa-check-square=""></i>  Gerar XML</a></td>
                            <td align="center"><a href="#" class="btn btn-azul btn-pequeno"><i class="fas fa-edit"></i> Editar</a></td>
                            																				
                        </tr>				
							</tbody>
						</table>
								
			</div>
					</div> 
			</div>
        </div>
    </div>
    </div>
</section>