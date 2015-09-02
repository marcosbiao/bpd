<!DOCTYPE html>
<html lang="pt">

    <?php include("head.php"); ?>
     
  <body>
    
    <?php include("escolheCabecario.php");?>
      
      <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaCadastraUsuario.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Dados obrigatorios</h3>
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Login</span>
	  					<input type="text" required="required" class="form-control"  id="textFieldLogin" name="textFieldLogin" placeholder="Digite o login do usuario" aria-describedby="sizing-addon2">
					</div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Senha</span>
	  					<input type="text" required="required" class="form-control"  id="textFieldSenha" name="textFieldSenha" placeholder="Digite a senha do usuario" aria-describedby="sizing-addon2">
					</div>
                                        
                                         <div class="input-group">
                                            <span class="input-group-addon" id="sizing-addon2">Carga Horaria</span>
                                            <select id="nivel" name="nivel" required="required">
                                                <option value="">---- Selecione ----</option>
                                                <option value="1">Administrador Geral</option>
                                                <option value="2">Coordenador de Curso</option>
                                            </select>
                                         </div>
                                        
                                        <div>
                                            <input type="submit" id = "bm" class="btn btn-default topElementos" value="Cadastrar" />
                                        </div>
                                </div>
                        </form>
        </div>
      
    <?php include("script.html"); ?>
    <?php include("foot.html"); ?>
  </body>
</html>
