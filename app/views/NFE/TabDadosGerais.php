	
<span class="d-block mt-4 h4 border-bottom">Informações básicas</span>
<div class="rows pb-4">
		
		<div class="col-2 mb-3">
				<label class="text-label">Num NFe (<a href="#" onclick="open_modal_mudar_num_nfe();">mudar</a>)</label>	
				<input type="text" name="nNF" id="nNF"  class="form-campo">
		</div>
		<div class="col-2 mb-3">
				<label class="text-label">Série (<a href="#" onclick="open_modal_mudar_num_nfe();">mudar</a>)</label>	
				<input type="text" name="serie" id="serie" value="1"   class="form-campo">
		</div>
				

		<div class="col-2 mb-3">
				<label class="text-label">Tipo de operação</label>	
				<select class="form-campo" name="tpNF" id="tpNF" onchange="selecionar_tipo_operacao();">
						<option value="0">ENTRADA</option>
						<option value="1" selected="">SAÍDA</option>
				</select>
		</div>
		<div class="col-6 mb-3">
			<label class="text-label">Natureza Operação</label>	
			   <select class="form-campo" name="natOp" id="natOp" >
				   <?php foreach($cfops as $cfop) { 
						echo "<option value='$cfop->desc_cfop'>$cfop->codigo_cfop - $cfop->desc_cfop</option>";
				   } ?>
				</select>  
		</div>
								
	
				
				<div class="col-3 mb-3">
						<label class="text-label">Data Emissão NF</label>	
						<input type="date" name="data_emissao_nfe"  placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-2 mb-3">
						<label class="text-label">Hora emissão NF</label>	
						<input type="time" name="hora_emissao_nfe"  placeholder="Digite aqui..." class="form-campo">
				</div>                             
	
				<div class="col-3 mb-3">
						<label class="text-label">Data saída/entrada</label>	
						<input type="date" name="data_saida_nfe"  placeholder="Digite aqui..." class="form-campo">
				</div> 
				<div class="col-2 mb-3">
						<label class="text-label">Hora saída/entrada</label>	
						<input type="time" name="hora_saida_nfe"  placeholder="Digite aqui..." class="form-campo">
				</div>
	
				<div class="col-3 mb-3">
					<label class="text-label">Ambiente</label>	
					<select class="form-campo" name="tpAmb">
						<option value="1">Produção</option>
						<option value="2" selected="">Homologação</option>                                                 
							
					</select>
				</div>				
				
	
				<div class="col-3 mb-3">
					<label class="text-label">Destinado a consumidor final</label>	
					<select class="form-campo" name="indFinal">
						<option value="0">NÃO</option>
						<option value="1">SIM</option>
					</select>
				</div>
			  
				<div class="col-3 mb-3">
					<label class="text-label">Finalidade da emissão</label>	
					<select class="form-campo" name="finNFe">
							<option value="1">NORMAL</option>
							<option value="2">COMPLEMENTAR</option>
							<option value="3">DE AJUSTE</option>
							<option value="4">DEVOLUÇÃO DE MERCADORIA</option>
					</select>
				</div>
				<div class="col-3 mb-3">
						<label class="text-label">Destino da operação</label>	
						<select class="form-campo" name="destino_operacao">
								<option value="0">AUTOMÁTICO</option>
								<option value="1">OPERAÇÃO INTERNA</option>
								<option value="2">OPERAÇÃO INTERESTADUAL</option>
								<option value="3">OPERAÇÃO COM EXTERIOR</option>
						</select>
				</div>
				                                       
				<div class="col-6  mb-3">
					<label class="text-label">Presença do comprador</label>
					<select class="form-campo" name="indPres">
							<option value="0">NÃO SE APLICA</option>
							<option value="1">OPERAÇÃO PRESENCIAL</option>
							<option value="2" selected="">OPERAÇÃO NÃO PRESENCIAL, PELA INTERNET</option>
							<option value="3">OPERAÇÃO NÃO PRESENCIAL, TELEATENDIMENTO</option>
							<option value="4">NFC-e EM OPERAÇÃO COM ENTREGA A DOMICÍLIO</option>
							<option value="5">OPERAÇÃO PRESENCIAL, FORA DO ESTABELECIMENTO</option>
							<option value="9">OPERAÇÃO NÃO PRESENCIAL, OUTROS</option> 
					</select>
				</div>
				
				<div class="col-2 mb-3">
						<label class="text-label">Versão </label>	
						<input type="text" name="verProc" value="4.0"  class="form-campo">
				</div>
				
				<div class="col-3 mb-3">
						<label class="text-label">Possui NF referenciada</label>	
						<select class="form-campo" name="meuRefNF">
								<option value="0">NÃO</option>
								<option value="1">SIM</option>                                                 
						  </select>
				</div> 				

</div>
        
		
	