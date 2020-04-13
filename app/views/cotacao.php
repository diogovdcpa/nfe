<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_cotacao.js"></script>
<section class="d-inline-block">
				<div class="rows">
					<div class="col-3 d-flex">
					<div class="divisor border-right">
						<span class="titulo"><i class="fab fa-wpforms"></i> ATENDER COTAÇÕES</span>
						<form action="">
							<div class="rows">
								<div class="col-6">
                                         <label class="text-label">Código</label>
                                         <input type="text" name="id_item_cotacao" id="id_item_cotacao" readonly="true" class="form-campo">
                                 </div>		
								 <div class="col-6">
                                         <label class="text-label">qtde</label>
                                         <input type="number" name="qtde" id="qtde" readonly="true" class="form-campo">
                                 </div>						 
                                 <div class="col-12">
                                         <label class="text-label">Produto</label>
                                         <input type="text" name="produto" id="produto" readonly="true" class="form-campo">
                                 </div>
								 <div class="col-6">
                                         <label class="text-label">Valor</label>
                                         <input type="text" name="valor_cotacao" id="valor_cotacao" class="form-campo">
                                 </div>
								 <div class="col-6">
                                         <label class="text-label">SubTotal</label>
                                         <input type="text" name="subtotal" id="subtotal" class="form-campo">
                                 </div>
							
					<div class="col-12">
                                         <label class="text-label">Data Entrega</label>
                                         <input type="date" name="data_entrega" id="data_entrega" class="form-campo">
                                 </div>								 
				 <div class="col-12 mt-2">
                                       <a href="javascript:;" onclick="salvar()" class="btn btn-azul width-100"> Salvar</a>
                                   </div>
                                 </div>
						</form>
					</div>
					</div>
				
				<div class="col-9">
					<div class="base-lista pl-0">
						<span class="titulo"><i class="far fa-list-alt"></i> LISTA DE COTAÇÕES</span>
						<div class="tabela-responsiva">
							<div class="rolagem-tabela2">
								<table width="100%" cellpadding="0" cellspacing="0" class="tabela">	
									<thead>
										<tr>
                                                                                    <th align="center">Id</th>
                                                                                    <th align="center">Data</th>
                                                                                    <th>Produto</th>
                                                                                    <th align="center">qtde</th>
                                                                                    <th align="center">Valor</th>
                                                                                    <th align="center">SubTotal</th>
                                                                                    <th align="center">Status</th>
                                                                                    <th align="center" colspan="1">Ação</th>
										</tr>
									</thead>
									<tbody>	
								<?php foreach($itens as $item){ ?>
                                                                <tr>
                                                                        <td align="center"><?php echo $item->id_item_cotacao ?></td>
                                                                        <td align="center"><?php echo databr( $item->limite_entrega,0) ?></td>
                                                                        <td ><?php echo $item->produto ?></td>
                                                                        <td align="center"><?php echo $item->qtde ?></td>
                                                                        <td align="center"><?php echo $item->valor_cotacao ?></td>
                                                                        <td align="center"><?php echo $item->valor_cotacao * $item->qtde ?></td>
                                                                        <td align="center"><?php echo $item->status_item_cotacao ?></td>

                                                                        <td align="center">
                                                                            <?php if($item->id_status_item_cotacao>1){ ?>
                                                                               <a href="javascript:;" onclick="mudado(this)" >Cotado</a>
                                                                            <?php } else { ?>
                                                                            <a href="javascript:;" onclick="mostrar_dados(this)" class="btn btn-verde">Cotar</a>
                                                                            <?php } ?>
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
			</section>



<script>
	var id_cotacao  = "<?php echo $id_cotacao ?>";
	var total       = "<?php echo count($itens)?>";
</script>