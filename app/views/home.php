<section class="conteudo">
			<div class="">				
				<div class="conteudo-fluido">
				<div class="rows">	
                <div class="col-12">
                <div class="caixa">
                    <div class="caixa-titulo py-1 d-inline-block width-100">
                            <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Adicionar Nota</span>
                    </div>

                <div class="p-5 pb-0 pt-4 width-100 float-left">	
                         <ul class="tabs">
                                <li class="current" data-tab="tab-1">Dados gerais</li>
                                <li data-tab="tab-2" class="">Dados Destinatário</li>
                                <li data-tab="tab-3" class="">Produtos</li>
                                <li data-tab="tab-4">Totalizadores</li>
                                <li data-tab="tab-5">Transporte</li>
                                <li data-tab="tab-6">Faturas/duplicatas</li>
                        </ul>		
       
                    
		<div id="tab-1" class="tab-content current">
                <span class="d-block mt-4 h4 border-bottom">Informações básicas</span>
                <div class="rows pb-4">
                        <div class="col-2 mb-3">
                                <label class="text-label">Num NFe (<a href="#" onclick="open_modal_mudar_num_nfe();">mudar</a>)</label>	
                                <input type="text" name="numero_nfe" value="00000001" readonly="true" placeholder="Digite aqui..." class="form-campo">
                        </div>
                        <div class="col-1 mb-3">
                                <label class="text-label">Pedido </label>	
                                <input type="text" name="id_pedido" value="1" readonly="true" placeholder="Digite aqui..." class="form-campo">
                        </div>

                        <div class="col-2 mb-3">
                                <label class="text-label">Tipo de operação</label>	
                                <select class="form-campo" name="tipo_operacao" id="tipo_operacao" onchange="selecionar_tipo_operacao();">
                                        <option value="0">ENTRADA</option>
                                        <option value="1" selected="">SAÍDA</option>
                                </select>
                        </div>

                        <div class="col-4 mb-3">
                                <label class="text-label">CFOP</label>	
                               <select class="form-campo" name="id_cfop" id="id_cfop">
                                    <option value="">Selecione uma Opção</option>
                                </select>  
                        </div>
                                <div class="col-2 mb-3">
                                        <label class="text-label">Série (<a href="#" onclick="open_modal_mudar_num_nfe();">mudar</a>)</label>	
                                        <input type="text" name="serie_nfe" value="1" readonly="true" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                 <div class="col-1 mb-3">
                                    <label class="text-label">UF</label>	
                                    <select class="form-campo" name="nfe_id_uf" id="nfe_id_uf">
                                            <option value="1">Acre</option> <option value="2">Alagoas</option> <option value="3">Amapá</option> <option value="4">Amazonas</option> <option value="5">Bahia</option> <option value="6">Ceará</option> <option value="7">Distrito Federal</option> <option value="8">Espírito Santo</option> <option value="9">Goiás</option> <option value="10">Maranhão</option> <option value="11">Mato Grosso do Sul</option> <option value="12">Mato Grosso</option> <option value="13">Minas Gerais</option> <option value="14">Paraná</option> <option value="15">Paraíba</option> <option value="16">Pará</option> <option value="17">Pernambuco</option> <option value="18">Piauí</option> <option value="19">Rio de Janeiro</option> <option value="20" selected="">Rio Grande do Norte</option> <option value="21">Rio Grande do Sul</option> <option value="22">Rondônia</option> <option value="23">Roraima</option> <option value="24">Santa Catarina</option> <option value="25">Sergipe</option> <option value="26">São Paulo</option> <option value="27">Tocantins</option>                                     </select>  
                                </div>
                                <div class="col-2 mb-3">
                                        <label class="text-label">Data Emissão NF</label>	
                                        <input type="date" name="data_emissao_nfe" value="2019-01-31" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-2 mb-3">
                                        <label class="text-label">Hora emissão NF</label>	
                                        <input type="time" name="hora_emissao_nfe" value="08:45:26" placeholder="Digite aqui..." class="form-campo">
                                </div>                             
                    
                                <div class="col-2 mb-3">
                                        <label class="text-label">Data saída/entrada</label>	
                                        <input type="date" name="data_saida_nfe" value="2019-01-31" placeholder="Digite aqui..." class="form-campo">
                                </div> 
                                <div class="col-3 mb-3">
                                        <label class="text-label">Hora saída/entrada</label>	
                                        <input type="time" name="hora_saida_nfe" value="08:45:26" placeholder="Digite aqui..." class="form-campo">
                                </div>
                    
                                <div class="col-3 mb-3">
                                    <label class="text-label">Ambiente</label>	
                                    <select class="form-campo" name="nfe_ambiente">
                                        <option value="1">Produção</option>
                                        <option value="2" selected="">Homologação</option>                                                 
                                            
                                    </select>
                                </div>
                    
                                <div class="col-3 mb-3">
                                        <label class="text-label">Destinado a consumidor final</label>	
                                        <select class="form-campo" name="consumidor_final">
                                            <option value="0">NÃO</option>
                                            <option value="1">SIM</option>
                                        </select>
                                </div>
                              
                                <div class="col-3 mb-3">
                                        <label class="text-label">Finalidade da emissão</label>	
                                        <select class="form-campo" name="finalidade_emissao">
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
                                <div class="col-3 mb-3">
                                        <label class="text-label">Possui NF referenciada</label>	
                                        <select class="form-campo" name="meuRefNF">
                                                <option value="0">NÃO</option>
                                                <option value="1">SIM</option>                                                 
                                          </select>
                                </div>                                        
                                <div class="col-6  mb-3">
                                    <label class="text-label">Presença do comprador</label>
                                    <select class="form-campo" name="presenca_comprador">
                                            <option value="0">NÃO SE APLICA</option>
                                            <option value="1">OPERAÇÃO PRESENCIAL</option>
                                            <option value="2" selected="">OPERAÇÃO NÃO PRESENCIAL, PELA INTERNET</option>
                                            <option value="3">OPERAÇÃO NÃO PRESENCIAL, TELEATENDIMENTO</option>
                                            <option value="4">NFC-e EM OPERAÇÃO COM ENTREGA A DOMICÍLIO</option>
                                            <option value="5">OPERAÇÃO PRESENCIAL, FORA DO ESTABELECIMENTO</option>
                                            <option value="9">OPERAÇÃO NÃO PRESENCIAL, OUTROS</option> 
                                    </select>
                                </div>

                                <div class="col-6 mb-3">
                                        <label class="text-label">Ins. Est. Subst. Trib.</label>	
                                        <input type="text" name="CIEST" value="mjailton@gmail.com" placeholder="Digite aqui..." class="form-campo">
                                </div>                                             

                </div>
        </div>

        <div id="tab-2" class="tab-content">									
            <span class="d-block mt-4 h4 border-bottom">Dados Destinatário</span>										
            <div class="rows pb-4">																					
            
            <div class="col-2 mb-3">
                    <label class="text-label">ID Contato (<a href="#" onclick="open_modal_mudar_num_nfe();">Alterar</a>)</label>	
                    <input type="text" name="id_contato" value="1" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-6 mb-3">
                    <label class="text-label">Contato (Nome / Razão Social, Fantasia e CPF / CNPJ)</label>	
                    <input type="text" name="bairro" value="Manoel Jailton" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-4 mb-3">
                    <label class="text-label">Razão/Nome dest.</label>	
                    <input type="text" name="ExNome" value="" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-4 mb-3">
                     <label class="text-label">CPF destinatário</label>	
                     <input type="text" name="ECNPJ" value="78589452387" placeholder="Digite aqui..." class="form-campo">
             </div>
                
            <div class="col-4 mb-3">
                    <label class="text-label">RG</label>	
                    <input type="text" name="EIE" value="330036944" placeholder="Digite aqui..." class="form-campo">
            </div>	
                
            <div class="col-4 mb-3">
                    <label class="text-label">Suframa</label>	
                    <input type="text" name="EIM" value="" placeholder="Digite aqui..." class="form-campo">
            </div>  
            
             <div class="col-4 mb-3">
                     <label class="text-label">CNPJ destinatário</label>	
                     <input type="text" name="ECNPJ" value="152421250001" placeholder="Digite aqui..." class="form-campo">
             </div>
                
            <div class="col-4 mb-3">
                    <label class="text-label">Inscr. Estadual</label>	
                    <input type="text" name="EIE" value="" placeholder="Digite aqui..." class="form-campo">
            </div>	
                
            <div class="col-4 mb-3">
                    <label class="text-label">Inscr. Municipal</label>	
                    <input type="text" name="EIM" value="" placeholder="Digite aqui..." class="form-campo">
            </div> 
            
            <div class="col-3 mb-3">
                <label class="text-label">CEP</label>
                 <div class="input-grupo">
                 <input type="text" value="65074-410" name="ECEP" placeholder="Digite aqui..." class="form-campo">

                 <div class="input-grupo-append"><button class="btn btn-azul"><i class="fas fa-search"></i></button></div>
                 </div>
            </div> 
            <div class="col-4 mb-3">
                    <label class="text-label">Logradouro</label>	
                    <input type="text" name="ExLgr" value="Rua Machado de Assis" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-1 mb-4">
                    <label class="text-label">Numero</label>	
                    <input type="text" name="Enro" value="105" placeholder="Digite aqui..." class="form-campo">
            </div>
            <div class="col-4 mb-3">
                    <label class="text-label">Complemento</label>	
                    <input type="text" name="ExCpl" value="Próximo à Extrafarma" placeholder="Digite aqui..." class="form-campo">
            </div>
            <div class="col-3 mb-3">
                    <label class="text-label">Bairro</label>	
                    <input type="text" name="ExBairro" value="Fátima" placeholder="Digite aqui..." class="form-campo">
            </div>	
                 
           
            <div class="col-3 mb-2">
                    <label class="text-label">UF</label>	
                    <select class="form-campo" name="EUF">
                            <option value="1">Acre</option> <option value="2">Alagoas</option> <option value="3">Amapá</option> <option value="4">Amazonas</option> <option value="5">Bahia</option> <option value="6">Ceará</option> <option value="7">Distrito Federal</option> <option value="8">Espírito Santo</option> <option value="9">Goiás</option> <option value="10" selected="">Maranhão</option> <option value="11">Mato Grosso do Sul</option> <option value="12">Mato Grosso</option> <option value="13">Minas Gerais</option> <option value="14">Paraná</option> <option value="15">Paraíba</option> <option value="16">Pará</option> <option value="17">Pernambuco</option> <option value="18">Piauí</option> <option value="19">Rio de Janeiro</option> <option value="20">Rio Grande do Norte</option> <option value="21">Rio Grande do Sul</option> <option value="22">Rondônia</option> <option value="23">Roraima</option> <option value="24">Santa Catarina</option> <option value="25">Sergipe</option> <option value="26">São Paulo</option> <option value="27">Tocantins</option>                     </select>
            </div>
            
            <div class="col-6 mb-2">
                        <label class="text-label">Cidade</label>	
                        <select class="form-campo" name="EUF">
                            <option value="1">Alta Floresta D'Oeste</option> <option value="2">Ariquemes</option> <option value="3">Cabixi</option>
						</select>
                </div>    
            <div class="col-2 mb-3">
                     <label class="text-label">DDD</label>	
                     <input type="text" name="Efone" value="98" placeholder="Digite aqui..." class="form-campo">
             </div> 
                
             <div class="col-2 mb-3">
                     <label class="text-label">Telefone</label>	
                     <input type="text" name="Efone" value="32436394" placeholder="Digite aqui..." class="form-campo">
             </div>
             <div class="col-2 mb-3">
                     <label class="text-label">Celular</label>	
                     <input type="text" name="Efone" value="999924667" placeholder="Digite aqui..." class="form-campo">
             </div>
             <div class="col-6 mb-3">
                     <label class="text-label">E-mail</label>	
                     <input type="text" name="Eemail" value="mjailton@gmail.com" placeholder="Digite aqui..." class="form-campo">
             </div>

            </div>
    </div> 
    
    <div id="tab-3" class="tab-content">									
            <span class="d-block mt-4 h4 border-bottom">Produto</span>										
            <div class="rows pb-4">																					
            <div class="col-12">
                    <div class="caixa">
                    <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                            <tr>
                                                    <th align="center">Item</th>
                                                    <th align="left">Produto</th>
                                                    <th align="center">Preço</th>
                                                    <th align="center">Qtde</th>
                                                    <th align="center">Subtotal</th>
                                                    <th align="center">Valor Aprox.</th>
                                                    <th align="center">IPI</th>
                                                    <th align="center">PIS</th>
                                                    <th align="center">PISST</th>
                                                    <th align="center">COFINS</th>
                                                    <th align="center">COFINSST</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                                                                    <tr>
                                                    <td align="center">1</td>
                                                    <td align="left">Frigideira Reforçada</td>
                                                    <td align="center">R$ 497.00</td>
                                                    <td align="center">1</td>
                                                    <td align="center">R$ 497</td>		
                                                    <td align="center">R$ 182.80</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                            </tr>
                                                                                    <tr>
                                                    <td align="center">2</td>
                                                    <td align="left">Panela com tampa 2</td>
                                                    <td align="center">R$ 100.00</td>
                                                    <td align="center">2</td>
                                                    <td align="center">R$ 200</td>		
                                                    <td align="center">R$ 36.78</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                            </tr>
                                                                                    <tr>
                                                    <td align="center">3</td>
                                                    <td align="left">Panela de Pressão</td>
                                                    <td align="center">R$ 100.00</td>
                                                    <td align="center">3</td>
                                                    <td align="center">R$ 300</td>		
                                                    <td align="center">R$ 36.78</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                                    <td align="center">R$ 0.00</td>	
                                            </tr>
                                          
                                            <tr>
                                                   <td colspan="11" align="right"><span class="text-verde minimo-font">Total R$ 600.00</span></td>
                                            </tr>	
                                    </tbody>
                            </table>
                            <footer class="caixa-rodape text-right"> 
                                    <a href="" class="btn btn-roxo d-inline-block"><i class="fas fa-print"></i> Imprimir</a>
                                    <a href="" class="btn btn-azul d-inline-block"><i class="fas fa-print"></i> Imprimir NFE</a>
                            </footer>
                    </div>

                    </div>

            </div>
            </div>
    </div>
                    
    <div id="tab-4" class="tab-content">									
            <span class="d-block mt-4 h4 border-bottom">Totalizadores</span>										
            <div class="rows pb-4">																					
            
            <div class="col-2 mb-3">
                    <label class="text-label">Total BC ICMS</label>	
                    <input type="text" name="tot_base_calculo_icms" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-2 mb-3">
                    <label class="text-label">Total ICMS</label>	
                    <input type="text" name="tot_icms" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-2 mb-3">
                    <label class="text-label">Total ICMS desonerado</label>	
                    <input type="text" name="tot_icms_deson" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-2 mb-3">
                     <label class="text-label">Total do FCP</label>	
                     <input type="text" name="tot_FCP" value="0" placeholder="Digite aqui..." class="form-campo">
             </div>	
             <div class="col-2 mb-3">
                     <label class="text-label">Total BC ICMS ST</label>	
                     <input type="text" name="tot_base_calculoST" value="0" placeholder="Digite aqui..." class="form-campo">
             </div>	
             <div class="col-2 mb-3">
                     <label class="text-label">Total ICMS ST</label>	
                     <input type="text" name="tot_icmsST" value="0" placeholder="Digite aqui..." class="form-campo">
             </div>

            <div class="col-2 mb-3">
                    <label class="text-label">Total do FCPST</label>	
                    <input type="text" name="tot_FCPST" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
            <div class="col-2 mb-4">
                    <label class="text-label">Total do FCPST Ret.</label>	
                    <input type="text" name="tot_FCPSTRet" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>          

            <div class="col-2 mb-3">
                    <label class="text-label">Total bruto dos produtos</label>	
                    <input type="text" name="tot_produto" value="997" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-2 mb-3">
                    <label class="text-label">Total de frete</label>	
                    <input type="text" name="tot_Frete" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>	
            <div class="col-2 mb-3">
                    <label class="text-label">Total de seguro</label>	
                    <input type="text" name="tot_Seguro" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-2 mb-3">
                    <label class="text-label">Total de desconto</label>	
                    <input type="text" name="tot_Desconto" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>	

            <div class="col-2 mb-3">
                    <label class="text-label">Total de II</label>	
                    <input type="text" name="tot_Importacao" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-2 mb-3">
                    <label class="text-label">Total de IPI</label>	
                    <input type="text" name="tot_IPI" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
                <div class="col-2 mb-3">
                    <label class="text-label">Total de IPI Devolução</label>	
                    <input type="text" name="tot_IPI_Devolucao" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>             
                
            <div class="col-2 mb-3">
                    <label class="text-label">Total de PIS</label>	
                    <input type="text" name="tot_PIS" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
            <div class="col-2 mb-3">
                    <label class="text-label">Total de COFINS</label>	
                    <input type="text" name="tot_COFINS" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-2 mb-3">
                    <label class="text-label">Total Outras Despesas</label>	
                    <input type="text" name="tot_Outro" value="0" placeholder="Digite aqui..." class="form-campo">
            </div>
                
            <div class="col-2 mb-3">
                    <label class="text-label">TOTAL DA NF</label>	
                    <input type="text" name="tot_nota" value="997" placeholder="Digite aqui..." class="form-campo">
            </div>
            <div class="col-2 mb-3">
                    <label class="text-label">Total Aproximado</label>	
                    <input type="text" name="total_tributo_aproximado" value="256.3566" placeholder="Digite aqui..." class="form-campo">
            </div>
                       
            </div>
			
            <span class="d-block mt-3 mb-0 h4">Lei da Transparência</span>
			<small class="d-block mb-3 border-bottom pb-2">Esta lei mostra ao cliente a quantidade de impostos que ele está pagando para o governo ao adquirir a mercadoria.</small>
			<div class="rows">
				<div class="col">
                    <label class="text-label">Impostos federais</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col">
                    <label class="text-label">Impostos estaduais</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col">
                    <label class="text-label">Impostos municipais</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col">
                    <label class="text-label">Total aproximado </label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
			</div>

			<!--mostra mais opções ocultas -->
			<div class="pt-4 item limpo"> 
				<input type="checkbox" name="" id="info-imposto"> <label for="info-imposto" class=" text-verde h6">Informar retenções de impostos</label>
				<div class="rows mostra">
				<div class="col mb-3">
                    <label class="text-label">Valor retido PIS</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">Valor retido COFINS</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">Valor retido CSLL</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">BC retido IRRF</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">Valor retido IRRF</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">Valor retido IRRF</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">Valor retido previdência</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
			</div>
			</div>
			
	</div>

    <div id="tab-5" class="tab-content">		
            <span class="d-block mt-4 h4 border-bottom">Dados do transporte</span>
			<div class="rows">
				<div class="col-6 mb-3">
                    <label class="text-label">Modalidade do frete</label>	
                    <select id="" class="form-campo" name="XmodFrete">
						<option value="0">0 - Frete por conta do Remetente (CIF)</option>
						<option value="1">1 - Frete por conta do Destinatário (FOB)</option>
						<option value="2">2 - Frete por conta de Terceiros</option>
						<option value="3">3 - Transporte Próprio por conta do Remetente</option>
						<option value="4">4 - Transporte Próprio por conta do Destinatário</option>
						<option value="9">9 - Sem Ocorrência de Transporte</option>
					</select>
				</div>
				<div class="col-6 mb-3">
                    <label class="text-label">Nome transportador</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-3 mb-3">
                    <label class="text-label">CNPJ/CPF transport.</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-3 mb-3">
                    <label class="text-label">Inscr. Est. transp.</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-6 mb-3">
                    <label class="text-label">Endereço completo</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-2 mb-3">
                    <label class="text-label">UF transportador</label>	
                    <select id="" class="form-campo" name=""><option value="">Selecione</option><option value="AC">AC</option><option value="AL">AL</option><option value="AM">AM</option><option value="AP">AP</option><option value="BA">BA</option><option value="CE">CE</option><option value="DF">DF</option><option value="ES">ES</option><option value="GO">GO</option><option value="MA">MA</option><option value="MG">MG</option><option value="MS">MS</option><option value="MT">MT</option><option value="PA">PA</option><option value="PB">PB</option><option value="PE">PE</option><option value="PI">PI</option><option value="PR">PR</option><option value="RJ">RJ</option><option value="RN">RN</option><option value="RO">RO</option><option value="RR">RR</option><option value="RS">RS</option><option value="SC">SC</option><option value="SE">SE</option><option value="SP">SP</option><option value="TO">TO</option><option value="EX">EX</option></select>
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">Município transp.</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">Placa veículo</label>	
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-2 mb-3">
                    <label class="text-label">UF veículo</label>	
                   <select id="" class="form-campo" name=""><option value="">Selecione</option><option value="AC">AC</option><option value="AL">AL</option><option value="AM">AM</option><option value="AP">AP</option><option value="BA">BA</option><option value="CE">CE</option><option value="DF">DF</option><option value="ES">ES</option><option value="GO">GO</option><option value="MA">MA</option><option value="MG">MG</option><option value="MS">MS</option><option value="MT">MT</option><option value="PA">PA</option><option value="PB">PB</option><option value="PE">PE</option><option value="PI">PI</option><option value="PR">PR</option><option value="RJ">RJ</option><option value="RN">RN</option><option value="RO">RO</option><option value="RR">RR</option><option value="RS">RS</option><option value="SC">SC</option><option value="SE">SE</option><option value="SP">SP</option><option value="TO">TO</option><option value="EX">EX</option></select>
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">Reg. Nac. Trans. Carga</label>	                   
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">Identificação vagão</label>	                   
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
				<div class="col-4 mb-3">
                    <label class="text-label">Identificação balsa</label>	                   
                    <input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>
			</div>
			
			<!--mostra mais opções ocultas -->
			<div class="item limpo"> 
				<input type="checkbox" name="" id="info-retencao"> <label for="info-retencao" class=" text-verde h6"> Informar retenções de ICMS de transporte</label>
				<div class="mostra">
					<span class="d-block pb-1 h5 mb-1 border-bottom">Retenção ICMS transporte</span>
					<div class="rows pb-4">
						<div class="col mb-3">
							<label class="text-label">Valor do serviço</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>
						<div class="col mb-3">
							<label class="text-label">BC retenção ICMS</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>
						<div class="col mb-3">
							<label class="text-label">Alíq. da retenção</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>
						<div class="col mb-3">
							<label class="text-label">Valor ICMS retido</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>
						<div class="col mb-3">
							<label class="text-label">CFOP transp</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>
						<div class="col mb-3">
							<label class="text-label">UF do ICMS</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>
						<div class="col mb-3">
							<label class="text-label">Município do ICMS</label>	                   
							 <select id="" class="form-campo" name=""><option value="">Selecione</option><option value="AC">AC</option><option value="AL">AL</option><option value="AM">AM</option><option value="AP">AP</option><option value="BA">BA</option><option value="CE">CE</option><option value="DF">DF</option><option value="ES">ES</option><option value="GO">GO</option><option value="MA">MA</option><option value="MG">MG</option><option value="MS">MS</option><option value="MT">MT</option><option value="PA">PA</option><option value="PB">PB</option><option value="PE">PE</option><option value="PI">PI</option><option value="PR">PR</option><option value="RJ">RJ</option><option value="RN">RN</option><option value="RO">RO</option><option value="RR">RR</option><option value="RS">RS</option><option value="SC">SC</option><option value="SE">SE</option><option value="SP">SP</option><option value="TO">TO</option><option value="EX">EX</option></select>
						</div>
					</div>               
				</div>               
			</div>    

			<span class="d-block pb-1 h5 mb-1 border-bottom">Volumes transportados</span>
			<div class="rows">
				<div class="col mb-3">
					<label class="text-label">Quantidade de vol.</label>	                   
					<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div> 
				<div class="col mb-3">
					<label class="text-label">Espécie dos vol.</label>	                   
					<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>   
				<div class="col mb-3">
					<label class="text-label">Marca dos volumes</label>	                   
					<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>      
				<div class="col mb-3">
					<label class="text-label">Numeração dos vol.</label>	                   
					<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>      
				<div class="col mb-3">
					<label class="text-label">Peso líquido</label>	                   
					<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>     
				<div class="col mb-3">
					<label class="text-label">Peso bruto</label>	                   
					<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>      
				<div class="col mb-3">
					<label class="text-label">Números dos lacres</label>	                   
					<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
				</div>           
			</div>           
    </div>  

    <div id="tab-6" class="tab-content">									
            <span class="d-block mt-4 h4 border-bottom pb-2">Faturas e duplicatas <a href="#janela1" rel="modal" class="btn btn-pequeno d-inline-block">Editar duplicatas</a></span>										
            <div class="rows pb-4">																					
            <div class="col-12">
                <div class="caixa">
                    <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th align="center">Vencimento</th>
                                            <th align="center">Valor</th>
                                            <th align="center">Vencimento</th>
                                            <th align="center">Valor</th>
                                            <th align="center">Vencimento</th>
                                            <th align="center">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center">31/01/2019</td>
                                            <td align="center">R$ 100,00</td>
                                            <td align="center">31/01/2019</td>
                                            <td align="center">R$ 100,00</td>
                                            <td align="center">31/01/2019</td>
                                            <td align="center">R$ 100,00</td>
                                        </tr>
                                    </tbody>
                            </table>
                    </div>
                </div>

					<div class="rows">   
						<div class="col mb-3">
							<label class="text-label">Número da fatura</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>     
						<div class="col mb-3">
							<label class="text-label">Valor original fat.</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>     
						<div class="col mb-3">
							<label class="text-label">Valor desconto</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>    
						<div class="col mb-3">
							<label class="text-label">Valor líquido fat.</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>    
						
					</div>

					<span class="d-block mt-4 h4 border-bottom">Outras indformações</span>	
					<div class="rows">  		
						<div class="col mb-6">
							<label class="text-label">Informações complementares</label>	                   
							<textarea rows="5" placeholder="Informações complementares" class="form-campo"></textarea>
						</div> 		
						<div class="col mb-6">
							<label class="text-label">Informações para o Fisco</label>	                   
							<textarea rows="5" placeholder="Informações complementares" class="form-campo"></textarea>
						</div>    
					</div>   

					<span class="d-block mt-4 h4 border-bottom">Informações de compras</span>	
					<div class="rows">  		
						<div class="col mb-3">
							<label class="text-label">Nota de Empenho</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>   		
						<div class="col mb-3">
							<label class="text-label">Pedido</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>  		
						<div class="col mb-3">
							<label class="text-label">Contrato</label>	                   
							<input type="text" name="" value="" placeholder="Digite aqui..." class="form-campo">
						</div>      
					</div>    
            </div>
            </div>
    </div>             
    
                    
</div>

    <div class="mb-5" style="clear:both">
        <input type="hidden" name="id_nfe" value="21">
        <input type="submit" value="Salvar" class="btn btn-azul btn-grande d-block m-auto">
    </div>
    </div>


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
<div id="mascara"></div>