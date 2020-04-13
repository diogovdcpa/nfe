<section class="conteudo">			
	<div class="conteudo-fluido">
	<div class="rows">	
		<div class="col-12">
			<div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="fas fa-search"></i> Buscar produto</span>
                    </div>					
				<form action="<?php echo URL_BASE ."produto/filtro" ?>" method="GET">
					<div class="rows p-4 px-5">
                                 <div class="col-6">
                                         <label class="text-label">Título do Produto</label>
                                         <input type="text" name="q" value="<?php echo isset($pesquisa) ? $pesquisa->q: "" ?>" placeholder="Digite aqui..." class="form-campo">
                                 </div>
                                
                                
								  <div class="col-1 mt-4">
                                       <input type="submit" value="Ok" class="btn btn-warning text-uppercase width-100">
                                   </div>					
					</div>	
			</div>	
		</div>	
			<div class="col-12">
				<div class="caixa">
						<div class="caixa-titulo py-1 d-inline-block width-100">
								<span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de empresa</span>
								<small class="d-inline-block text-right mb-0 h6 px-2"><b class="text-amarelo">20</b> registros</small>
								<a href="<?php echo URL_BASE?>produto/create" class="btn btn-amarelo float-right"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
						</div>
						
					
						<div class="row">
						<div class="tabela-responsiva">
							<table cellpadding="0" cellspacing="0">
								<thead>
									<tr>
                                            <th align="center">Id</th>
                                            <th align="left">Produto</th>
                                            <th align="left">CFOP</th>
                                            <th align="center">Preço</th>
                                            <th align="center" colspan="2">Ação</th>
                                    </tr>
								</thead>
								<tbody> 
									<?php foreach($produtos as $produto){ ?>
 
									<tr>
                                         <td align="center"><?php echo $produto->id_produto ?></td>
                                         <td align="left"><?php echo $produto->produto ?></td>
                                         <td align="left"><?php echo $produto->cfop ?></td>
                                         <td align="center"><?php echo $produto->preco ?></td>
                                         <td align="center">
										 <a href="<?php echo URL_BASE ."produto/editar/" .$produto->id_produto ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
                                         <a href="<?php echo URL_BASE ."produto/delete/" .$produto->id_produto ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
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
	</div>
	</div>
</section>