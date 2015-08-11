
<html lang="pt">


    <?php include("head.html");  ?>
    <body>
        
       <?php  include("cabecario.html");  ?>
        
        <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaCadastroBeneficiario.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Dados obrigatorios</h3>
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">CPF/Passaporte</span>
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
                                                <input type="text" id="textFieldEmitido" name="textFieldEmitido" class="form-control">
                                               
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
					
					<input type="submit" id = "bm" class="btn btn-default topElementos" value="Salvar" />
				</div>
			</form>	
		</div>  <!-- container-->
        
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

                 <!-- Referência do arquivo JS do plugin após carregar o jquery -->
                  <!-- Datepicker -->
                  <script src="js/bootstrap-datepicker.js"></script>

                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

                <script>
                  $(document).ready(function () {
                    $('#exemplo').datepicker({
                        format: "dd/mm/yyyy",
                        language: "pt-BR"
                    });
                  });
                </script>
                
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>

</html>
