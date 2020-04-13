<span class="d-block mt-4 h4 pb-2 border-bottom">Emitente </span>
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


<span class="d-block mt-4 h4 border-bottom">Emitente</span>										
        <div class="rows pb-4">																			
            
            <div class="col-2 mb-3">
                    <label class="text-label">ID </label>	
                    <input type="text" name="id_emitente" name="id_emitente" readonly="true" class="form-campo">
            </div>	
            <div class="col-6 mb-3">
                    <label class="text-label">Nome / Razão Social </label>	
                    <input type="text" name="xNomeEmitente" name="xNomeEmitente"  class="form-campo">
            </div>	
            <div class="col-4 mb-3">
                    <label class="text-label">Nome Fantasia</label>	
                    <input type="text" name="xFantEmitente" id="xFantEmitente"  class="form-campo">
            </div>
			 <div class="col-4 mb-3">
					 <label class="text-label">CNPJ </label>	
					 <input type="text" name="CNPJEmitente" id="CNPJEmitente" class="form-campo">
			 </div>
			 <div class="col-4 mb-3">
                     <label class="text-label">CPF </label>	
                     <input type="text" name="CPFRementente" id="CPFRementente"  class="form-campo">
             </div>
			 
            <div class="col-4 mb-3">
                    <label class="text-label">Inscr. Estadual</label>	
                    <input type="text" name="IEEmitente" id="IEEmitente"  class="form-campo">
            </div>
			<div class="col-3 mb-3">
					<label class="text-label">Ins. Est. Subst. Trib.</label>	
					<input type="text" name="IESTEmitente" id="IESTEmitente" class="form-campo">
			</div> 
			
            <div class="col-4 mb-3">
                    <label class="text-label">Inscr. Municipal</label>	
                    <input type="text" name="IMEmitente" id="IMEmitente"  class="form-campo">
            </div>
                
            <div class="col-4 mb-3">
                    <label class="text-label">CNAE</label>	
                    <input type="text" name="CNAEEmitente" id="CNAEEmitente"  class="form-campo">
            </div>
			
			<div class="col-6 mb-3">
				<label class="text-label">Regime Tributário</label>	
				 <select class="form-campo" name="CRTEmitente">
						<option value="10" >Simples Nacional</option> 
						<option value="20" >Lucro Presumido</option> 
						<option value="30" >Lucro Real</option> 
				</select>
			</div> 
		</div> 
        <span class="d-block mt-4 h4 border-bottom">Endereço Emitente</span>	    
		<div class="rows"> 
			<div class="col-3 mb-3">
                <label class="text-label">CEP</label>
                 <div class="input-grupo">
                 <input type="text"  name="CEPEmitente" id="CEPEmitente"  class="form-campo">

                 <div class="input-grupo-append"><button class="btn btn-azul"><i class="fas fa-search"></i></button></div>
                 </div>
            </div>
			
		   <div class="col-6 mb-3">
                    <label class="text-label">Logradouro</label>	
                    <input type="text" name="xLgrEmitente" id="xLgrEmitente" class="form-campo">
            </div>
			<div class="col-2 mb-4">
                    <label class="text-label">Numero</label>	
                    <input type="text" name="nroEmitente" id="nroEmitente"  class="form-campo">
            </div>
			<div class="col-4 mb-2">
					<label class="text-label">Complemento</label>	
					<input type="text" name="xCplEmitente" id="xCplEmitente"  class="form-campo">
			</div>
			
			<div class="col-3 mb-3">
                    <label class="text-label">Bairro</label>	
                    <input type="text" name="xBairroEmitente" id="xBairroEmitente"   class="form-campo">
            </div>
			<div class="col-1 mb-3">
                    <label class="text-label">Cód. Município</label>	
                    <input type="text" name="cMunEmitente" id="cMunEmitente"  class="form-campo">
            </div>
			
			<div class="col-3 mb-3">
                    <label class="text-label">Município</label>	
                    <input type="text" name="xMunEmitente" id="xMunEmitente" p class="form-campo">
            </div>
			<div class="col-3 mb-2">
                    <label class="text-label">UF</label>	
                    <select class="form-campo" name="UFEmitente">
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
                     <input type="text" name="dddEmitente" class="form-campo">
             </div> 
                
             <div class="col-2 mb-3">
                     <label class="text-label">Telefone</label>	
                     <input type="text" name="foneEmitente"  class="form-campo">
             </div>
            

            </div>