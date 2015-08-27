<!DOCTYPE html>
<html lang="pt">   
    
    <?php include("head.php");  ?>

    <body>
       <?php include("escolheCabecario.php");?>
      
        
        <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaCadastroBeneficiario.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Dados obrigatorios</h3>
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">CPF/Passaporte *</span>
	  					<input type="text" class="form-control"  id="textFieldCpf" name="textFieldCpf" placeholder="" aria-describedby="sizing-addon2">
					</div>
					
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Nome</span>
	  					<input type="text" class="form-control" id = "textFieldNome" name="textFieldNome" placeholder="Digite o seu nome" aria-describedby="sizing-addon2">
					</div>
					
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Email</span>
	  					<input type="text" class="form-control" id = "textFieldEmail" name="textFieldEmail" placeholder="Digite o seu email" aria-describedby="sizing-addon2">
					</div>
					
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">RG/RNE</span>
                                                <input type="text" class="form-control" id = "textFieldRg" name="textFieldRg" placeholder="" aria-describedby="sizing-addon2">
				
	  					<span class="input-group-addon" id="sizing-addon2">Orgão emissor(RG)</span>
                                                <input type="text" class="form-control" id = "textFieldOrgaoEmissor" name="textFieldOrgaoEmissor" placeholder="SSPBA" aria-describedby="sizing-addon2">
					</div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Emitido em</span>
	  					<!--<input type="text" class="form-control" id = "textFieldEmitido" name="textFieldEmitido" placeholder="" aria-describedby="sizing-addon2"> -->
                                                <!--<label for="data">Data:</label> -->
                                                <input type="date" class="date" id="textFieldEmitido" name="textFieldEmitido" /> 
                                        </div>
                                        
                                        <h5>Meu endereço</h5>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Estado</span>
	  					<input type="text" class="form-control" id = "textFieldEstado" name="textFieldEstado" placeholder="BA" aria-describedby="sizing-addon2">
			
	  					<span class="input-group-addon" id="sizing-addon2">Cidade</span>
	  					<input type="text" class="form-control" id = "textFieldCidade" name="textFieldCidade" placeholder="" aria-describedby="sizing-addon2">
					</div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Bairro</span>
	  					<input type="text" class="form-control" id = "textFieldBairro" name="textFieldBairro" placeholder="" aria-describedby="sizing-addon2">
					</div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">CEP</span>
	  					<input type="text" class="form-control" id = "textFieldCep" name="textFieldCep" placeholder="" aria-describedby="sizing-addon2">
					</div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Endereço</span>
	  					<input type="text" class="form-control" id = "textFieldEndereco" name="textFieldEndereco" placeholder="" aria-describedby="sizing-addon2">
					</div>
					
                                        <h5>Outras informações</h5>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Contato</span>
                                                <input type="tel" id = "textFieldContato" name="textFieldContato" placeholder="75 9999-9999" aria-describedby="sizing-addon2" >
					</div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">N° PIS</span>
                                                <input type="text" id = "textFieldPis" name="textFieldPis" placeholder="" aria-describedby="sizing-addon2" >
                                                
                                                <span class="input-group-addon" id="sizing-addon2">Ins. Municipal</span>
                                                <input type="text" id = "textFieldInscrisaoMunicipal" name="textFieldInscrisaoMunicipal" placeholder="" aria-describedby="sizing-addon2" >
					</div>
                                        
                                        <div class="input-group">
                                            <span class="input-group-addon" id="sizing-addon2">Escolaridade</span>
                                            <select id="escolaridade" name="escolaridade">
                                                <option value="">----- Selecionar -----</option>
                                                <option value="Pós-Doutorado">Pós-Doutorado</option>
                                                <option value="Doutor">Doutor</option>
                                                <option value="Mestrado">Mestrado</option>
                                                <option value="Pós-graduação">Pós-graduação</option>
                                                <option value="Superior completo">Superior completo</option>
                                                <option value="Superior cursando">Superior cursando</option>
                                                <option value="Ensino Médio">Ensino Médio</option>
                                                <option value="Ensino Fundamental">Ensino Fundamental</option>
                                                <option value="Sem escolaridade">Sem escolaridade</option>
                                                
                                            </select>
                                        </div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Profissão</span>
                                                <input type="text" id = "textFieldProfissao" name="textFieldProfissao" placeholder="" aria-describedby="sizing-addon2" >
					</div>
                                        
                                        <h5>Dados Bancarios</h5>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Cod Banco</span>
                                                <input type="text" id = "textFieldCodBanco" name="textFieldCodBanco" placeholder="" aria-describedby="sizing-addon2" >
					
                                                <span class="input-group-addon" id="sizing-addon2">Nome Banco</span>
                                                <input type="text" id = "textFieldBanco" name="textFieldBanco" placeholder="" aria-describedby="sizing-addon2" >
                                        </div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Agencia</span>
                                                <input type="text" id = "textFieldAgencia" name="textFieldAgencia" placeholder="" aria-describedby="sizing-addon2" >
					
                                                <span class="input-group-addon" id="sizing-addon2">Conta</span>
                                                <input type="text" id = "textFieldConta" name="textFieldConta" placeholder="" aria-describedby="sizing-addon2" >
                                        
                                                <span class="input-group-addon" id="sizing-addon2">Tipo</span>
                                            <select id="tipo" name="tipo">
                                                <option value="">-- Selecionar --</option>
                                                <option value="Corrente">Corrente</option>
                                                <option value="Poupança">Poupança</option>
                                            </select>
                                        </div>
                                        <br>
                                            <input type="reset" class="btn btn-default topElementos" value="Limpar"/>
                                            <input type="submit" id = "bm" class="btn btn-default topElementos" value="Salvar" />
				</div>
			</form>	
		</div>  <!-- container-->
        
                
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>

</html>
