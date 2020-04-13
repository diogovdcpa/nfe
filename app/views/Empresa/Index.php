<section class="conteudo">			
	<div class="conteudo-fluido">
	<div class="rows">	
		<div class="col-12">
			<div class="caixa">
				<div class="caixa-titulo py-1 d-inline-block width-100">
					<span class="h5  pt-1 mb-0 d-inline-block"><i class="fas fa-search"></i> Buscar por empresa</span>
				</div>
					
				<form name="busca" action="<?php echo URL_BASE ."empresa/filtro" ?>" method="GET" >
					<div class="rows p-4 px-5">
						   <div class="col-9">
								<label class="text-label">Empresa</label>
							   <input type="text" name="nome" value="<?php echo isset($pesquisa) ? $pesquisa->nome: "" ?>" placeholder="Digite aqui..." class="form-campo">	
						   </div>
						   <div class="col-3 mt-4">	
								<input type="submit" value="Pesquisar" class="btn btn-verde width-100 text-uppercase">
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
							<a href="<?php echo URL_BASE?>empresa/create" class="btn btn-amarelo float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
                    </div>
					
				
					<div class="row">
					<div class="tabela-responsiva">
						<table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th align="center">Id</th>
                                    <th align="left" width="290">Empresa</th>
                                    <th align="center" width="290">Fantasia</th>
                                    <th align="center">CNPJ</th>
                                    <th align="center" colspan="2">Ação</th>
                                </tr>
                            </thead>
                            <tbody> 
							<?php foreach($empresas as $empresa) { ?> 							
								<tr>
									<td align="center"><?php echo $empresa->id_empresa ?></td>
									<td align="center"><?php echo $empresa->razao_social ?></td>
									<td align="left"><?php echo $empresa->nome_fantasia ?> </td>
									<td align="center"><?php echo $empresa->cnpj ?></td>
									<td align="center">
										<a href="<?php echo URL_BASE ."empresa/edit/" .$empresa->id_empresa ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
										<a href="<?php echo URL_BASE ."empresa/delete/" .$empresa->id_empresa ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
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