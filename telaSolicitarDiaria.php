<html lang="pt">
    <?php 
    include("banco/banco.php");
//    $query = "select nome from programa";
//    $rs = Select ($query);
//    $row = mysql_fetch_array($rs);
    ?>
    
    <?php 
    $query2 = "select * from pessoa order by nome";
    $rs2 = Select ($query2);
    $row2 = mysql_fetch_array($rs2);
    ?>

    <?php include("head.php");  ?>
    <body>
       <?php  include("escolheCabecario.php");  ?>
        <h3>Solicitação de Diaria</h3>
    
        <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaSolicitarDiaria.php" method = "POST">
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

                                        
                                            <div class="input-group">
                                                <span class="input-group-addon" id="sizing-addon2">Nome</span> 
                                                <select id="pessoa" name="pessoa" required="required">
                                                    <option value="">--- Selecione---</option>
                                                    <?php 
                                                    echo "<option value=' {$row2['cpf']} '> {$row2['nome']} </option> ";                                                                                                        
                                                    
                                                    while($row2 = mysql_fetch_assoc($rs2)) { 
                                                        echo "<option value=' {$row2['cpf']} '> {$row2['nome']} </option> ";
                                                    } ?>
                                                </select>                                                                                                 
                                               
                                            </div>
                                         
                                        <h3>Dados para pagamento da diaria</h3>
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Cidade de partida</span>
	  					<input type="text" required="required" class="form-control" id = "cidadeOrigem" name="cidadeOrigem" placeholder="CIdade de origem" aria-describedby="sizing-addon2">
					
                                                <span class="input-group-addon" id="sizing-addon2">Cidade de destino</span>
	  					<input type="text" required="required" class="form-control" id = "cidadeDestino" name="cidadeDestino" placeholder="Cidade de destino" aria-describedby="sizing-addon2">
					
                                        </div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Periodo da viagem</span>
                                                <input type="date" required="required" class="form-control" maxlength="10" placeholder="YYYY/MM/DD" aria-describedby="sizing-addon2" id = "dataSaida" name="dataSaida">
                                                à
                                                <input type="date" required="required" class="form-control" maxlength="10" placeholder="YYYY/MM/DD" aria-describedby="sizing-addon2" id = "dataRetorno" name="dataRetorno">
                                        </div>
                                        
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Atividades a serem desenvolvidas no local</span>
                                                <input type="text" required="required" class="form-control" id = "atividadeLocal" name="atividadeLocal"  aria-describedby="sizing-addon2" maxlength="500">
                                        </div>
                                        <input type="submit" id = "submit" class="btn btn-default topElementos" value="Salvar" />
                                </div>
                        </form>
        </div>
        
    
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>    
    </body>
</html>