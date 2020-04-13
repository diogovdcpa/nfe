<section class="conteudo">			
	<div class="conteudo-fluido">
	<div class="rows">	
		<div class="col-12">
			<div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="fas fa-search"></i> Buscar por contato</span>
                    </div>
					
				<form name="busca" action="<?php echo URL_BASE ."contato/filtro" ?>" method="GET" >
					<div class="rows p-4 px-5">
							   <div class="col-6">
									<label class="text-label">Nome</label>	
									 <input type="text" name="q" value="<?php echo isset($pesquisa) ? $pesquisa->q: "" ?>" placeholder="Digite aqui..." class="form-campo">
							   </div>
							   <div class="col-6">
									<label class="text-label">Email</label>	
									 <input type="text"  name="email" value="<?php echo isset($pesquisa) ? $pesquisa->email: "" ?>" placeholder="Digite aqui..." class="form-campo">
							   </div>
						   <div class="col-12 mt-2">
							   <div class="rows">
								   <div class="col-3 mb-3">	
									   <div class="check"><input type="checkbox" name="eh_cliente" <?php echo isset($pesquisa->eh_cliente) ? "checked": "" ?>  value="S" class="form-campo" id="cliente"><label for="cliente"></label> <strong class="text-label d-inline-block">Cliente </strong></div>
									</div>
									<div class="col-3 mb-3">															
										<div class="check"><input type="checkbox" name="eh_fornecedor" <?php echo isset($pesquisa->eh_fornecedor) ? "checked": "" ?> value="S" class="form-campo" id="fornecedor"><label for="fornecedor"></label> <strong class="text-label d-inline-block">Fornecedor</strong></div>
									</div>
									<div class="col-3 mb-3">							
										<div class="check"><input type="checkbox" name="eh_transportador" <?php echo isset($pesquisa->eh_transportador) ? "checked": "" ?> value="S" class="form-campo" id="transportador"><label for="transportador"></label> <strong class="text-label d-inline-block">Transportador</strong></div>
									</div>
									<div class="col-3">	
										<input type="submit" value="Pesquisar" class="btn btn-verde width-100 text-uppercase">
									</div>
							   </div>
						   </div>
					</div> 
				</form>
			</div>
        </div>
		
		<div class="col-12">
			<div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de empresa</span>
							<small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-amarelo">20</b> registros</small>
							<a href="<?php echo URL_BASE?>contato/create" class="btn btn-amarelo float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
                    </div>
					
				
					<div class="row">
					<div class="tabela-responsiva">
						<table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
									<th align="center">Id</th>
									<th align="left" width="25%">Nome</th>
									<th align="center" width="25%">email</th>
									<th align="center">Fone</th>
									<th align="center" colspan="3">Ação</th>
								</tr>
                            </thead>
                            <tbody>                      
								 <?php foreach($contatos as $contato) { ?>       
								<tr>
									<td align="center"><?php echo $contato->id_contato ?></td>
									<td align="left"><?php echo $contato->nome ?></td>
									<td align="center"><?php echo $contato->email ?></td>
									<td align="center"><?php echo $contato->fone ?></td>											
									<td align="center">
										<a href="<?php echo URL_BASE ."contato/edit/" .$contato->id_contato ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
										<a href="<?php echo URL_BASE ."contato/delete/" .$contato->id_contato ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
									</td>
								</tr>
							<?php } ?>				
							</tbody>
						</table>
								
			</div>
					</div> 
			</div>
        </div>
    </div>
    </div>
</section>