<!DOCTYPE html>
<html lang="pt">
 <?php 
    include("banco/banco.php");
    $query = "Select * from usuario";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
 <?php
 
 ?>
    <?php include("head.php"); ?>
     
  <body>
    
    <?php include("escolheCabecario.php");?>
      
    <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaAlterarUsuario.php" method="POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Cadastro Usuario</h3>
                                        <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">Selecione o usuario</span>
                                        <select name="idUsuario">
                                            <option value="">--- Selecione ---</option>
                                            <?php
                                               echo "<option value=".$row['idUsuario'].">".$row['login']."</option>" ;
                                               while($row = mysql_fetch_array($rs)){
                                               echo "<option value=".$row['idUsuario'].">".$row['login']."</option>" ;
                                            } ?>
                                        </select>
                                        </div>
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Login</span>
	  					<input type="text" class="form-control"  id="textFieldLogin" name="textFieldLogin" placeholder="Digite o novo nome do usuario" aria-describedby="sizing-addon2">
					</div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Senha</span>
	  					<input type="text" class="form-control"  id="textFieldSenha" name="textFieldSenha" placeholder="Digite a nova senha do usuario" aria-describedby="sizing-addon2">
					</div>
                                        <div>
                                            <input type="submit" id = "bm" class="btn btn-default topElementos" value="Salvar" />
                                        </div>
                                </div>
                        </form>
        </div>  
    <?php include("script.html"); ?>
    <?php include("foot.html"); ?>
  </body>
</html>
