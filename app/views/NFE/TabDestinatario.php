<span class="d-block mt-4 h4 pb-2 border-bottom">Destinatário </span>
<div class="caixa">
			<div class="rows p-4">
				<div class="col-3 mb-3">
					 <label class="text-label">Titulo (<a href="#janela_produto" rel="modal" class="btn btn-azul p-0 px-1 d-inline-block btn-pequeno">Novo</a>)</label>
					 <input type="text" id="produto" data-type="localizar_produto" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-1 px-0 mt-4 mt-sm-4">
					<a href="#janela_listagem" rel="modal" class="btn d-inline-block width-100"><i class="fas fa-list-ul"></i></a> 
				</div>
				<div class="col-3 mb-3">
					 <label class="text-label">Opção</label>
					 <select class="form-campo">
						<option>Opção</option>
						<option>Opção</option>
						<option>Opção</option>
					 </select>
				</div>	
				<div class="col-3 mb-3">
					 <label class="text-label">Nome</label>
					 <input type="text" id="produto" data-type="localizar_produto" placeholder="Digite aqui..." class="form-campo">
				</div>	
				<div class="col-2 mt-4  mt-sm-4">
					<input type="submit" value="inseerir" class="btn btn-azul width-100">
				</div>
		</div>	
</div>


<span class="d-block mt-4 h4 border-bottom">Destinatário</span>										
        <div class="rows pb-4">																			
            
            
			<div class="col-6 mb-3">
				<label class="text-label">Indicador IE Dest</label>	
				 <select class="form-campo" name="indIEDest">
						<option value="1" >01- Contribuinte ICMS (informar a IE do destinatário)</option> 
						<option value="2" >02 - Contribuinte isento de Inscrição no cadastro de Contribuintes do ICMS</option> 
						<option value="9" >09 - Não Contribuinte, que pode ou não possuir Inscrição Estadual no Cadastro de Contribuintes do ICMS</option> 
				</select>
			</div> 
			
            <div class="col-6 mb-3">
                    <label class="text-label">Nome / Razão Social </label>	
                    <input type="text" name="xNomeDestinatario" name="xNomeDestinatario"  class="form-campo">
            </div>
			<div class="col-4 mb-3">
                    <label class="text-label">Inscr. Estadual</label>	
                    <input type="text" name="IEDestinatario" id="IEDestinatario"  class="form-campo">
            </div>
			<div class="col-3 mb-3">
					<label class="text-label">Insc. Suframa.</label>	
					<input type="text" name="ISUFDestinatario" id="ISUFDestinatario" class="form-campo">
			</div> 
			
            <div class="col-4 mb-3">
                    <label class="text-label">Inscr. Municipal</label>	
                    <input type="text" name="IMDestinatario" id="IMDestinatario"  class="form-campo">
            </div>
			
            <div class="col-4 mb-3">
                    <label class="text-label">Email</label>	
                    <input type="text" name="emailDestinatario" id="emailDestinatario"  class="form-campo">
            </div>
			 <div class="col-4 mb-3">
					 <label class="text-label">CNPJ </label>	
					 <input type="text" name="CNPJDestinatario" id="CNPJDestinatario" class="form-campo">
			 </div>
			 <div class="col-4 mb-3">
                     <label class="text-label">CPF </label>	
                     <input type="text" name="CPFRementente"  class="form-campo">
             </div>
			 
            <div class="col-4 mb-3">
                    <label class="text-label">Ind. Estrangeiro</label>	
                    <input type="text" name="idEstrangeiro" id="idEstrangeiro"  class="form-campo">
            </div>		
			
			
		</div> 
        <span class="d-block mt-4 h4 border-bottom">Endereço Destinatário</span>	    
		<div class="rows"> 
			<div class="col-3 mb-3">
                <label class="text-label">CEP</label>
                 <div class="input-grupo">
                 <input type="text" value="65074-410" name="CEPDestinatario" id="CEPDestinatario"  class="form-campo">

                 <div class="input-grupo-append"><button class="btn btn-azul"><i class="fas fa-search"></i></button></div>
                 </div>
            </div>
			
		   <div class="col-6 mb-3">
                    <label class="text-label">Logradouro</label>	
                    <input type="text" name="xLgrDestinatario" id="xLgrDestinatario" class="form-campo">
            </div>
			<div class="col-2 mb-4">
                    <label class="text-label">Numero</label>	
                    <input type="text" name="nroDestinatario" id="nroDestinatario"  class="form-campo">
            </div>
			<div class="col-4 mb-2">
					<label class="text-label">Complemento</label>	
					<input type="text" name="xCplDestinatario" id="xCplDestinatario"  class="form-campo">
			</div>
			
			<div class="col-3 mb-3">
                    <label class="text-label">Bairro</label>	
                    <input type="text" name="xBairroDestinatario" id="xBairroDestinatario"  placeholder="Digite aqui..." class="form-campo">
            </div>
			<div class="col-1 mb-3">
                    <label class="text-label">Cód.</label>	
                    <input type="text" name="cMunDestinatario" id="cMunDestinatario" placeholder="Digite aqui..." class="form-campo">
            </div>
			
			<div class="col-3 mb-3">
                    <label class="text-label">Município</label>	
                    <input type="text" name="xMunDestinatario" id="xMunDestinatario" placeholder="Digite aqui..." class="form-campo">
            </div>
			<div class="col-3 mb-2">
                    <label class="text-label">UF</label>	
                    <select class="form-campo" name="UFDestinatario">
							<option checked="">Selecione</option>
                           <?php foreach($estados as $estado){
								$selecionado = (!isset($empresa)) ? "" : ($empresa->id_estado==$estado->id_estado) ? "selected" : "";
							   echo "<option value='$estado->id_estado'> $estado->nome_estado</option>";
							}?>                     
					</select>
            </div>
			<div class="col-3 mb-2">
                    <label class="text-label">País</label>	
                    <select class="form-campo" name="cPais">
							<option checked="">Brasil</option>                                                
					</select>
            </div>             
            <div class="col-2 mb-3">
                     <label class="text-label">DDD</label>	
                     <input type="text" name="dddDestinatario" class="form-campo">
             </div> 
                
             <div class="col-2 mb-3">
                     <label class="text-label">Telefone</label>	
                     <input type="text" name="foneDestinatario"  class="form-campo">
             </div>
            

            </div>