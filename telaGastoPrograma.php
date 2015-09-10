<html lang="pt">
  
    <?php include("banco/banco.php"); ?>

    <?php include("head.php");  ?>
    <body>
       <?php  include("escolheCabecario.php");  ?>
        
    
        <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaGastoPrograma.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
        
                                        <center>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="sizing-addon2">Projetos</span> 
                                                <select id="programa" name="programa" required="required">
                                                    <option value="">--- Selecione---</option>
                                                    <?php 
                                                    $query = "select * from programa order by nome";
                                                    $rs = Select ($query);
                                                    $row = mysql_fetch_array($rs);
                                                    echo ("<option value= ". $row['idPrograma'].">". $row['nome']." </option> ");
                                                    while($row = mysql_fetch_array($rs)) { 
                                                        echo ("<option value= ". $row['idPrograma'].">". $row['nome']." </option> ");
                                                    } ?>
                                                    
                                                </select>
                                            </div>
                                        </center>

                                        <input type="submit" id = "submit" class="btn btn-default topElementos" value="Gerar relatorio" />
                                </div>
                        </form>
        </div>
        
    
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>    
    </body>
</html>