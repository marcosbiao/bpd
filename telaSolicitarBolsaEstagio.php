<html lang="pt">
    <?php 
    include("banco/banco.php");
    $query = "select nome from programa";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    
    <?php 
    $query2 = "select nome from pessoa order by nome";
    $rs2 = Select ($query2);
    $row2 = mysql_fetch_array($rs2);
    ?>

    <?php include("head.html");  ?>
    <body>
       <?php  include("cabecario.html");  ?>
        <h3>Solicitação de Estagio</h3>
    
        <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaSolicitarBolsaEstagio.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
        
                                        <center>
                                            <div>
                                                Projetos: 
                                                <select id="programa" name="programa">
                                                    <option value="">--- Selecione---</option>
                                                    <?php 
                                                    $query = "select nome from programa order by nome";
                                                    $rs = Select ($query);
                                                    $row = mysql_fetch_array($rs);
                                                    echo ("<option value= ". $row['idPrograma'].">". $row['nome']." </option> ");
                                                    while($row = mysql_fetch_array($rs)) { 
                                                        echo ("<option value= ". $row['idPrograma'].">". $row['nome']." </option> ");
                                                    } ?>
                                                    
                                                </select>
                                            </div>
                                        </center>

                                        <center>
                                            <div>
                                                Nome: 
                                                <select id="pessoa" name="pessoa">
                                                    <option value="">--- Selecione---</option>
                                                    <?php 
                                                    echo "<option value= {$row2['cpf']} > {$row2['nome']} </option> ";
                                                    while($row2 = mysql_fetch_assoc($rs2)) { 
                                                        echo "<option value= {$row2['cpf']} > {$row2['nome']} </option> ";
                                                    } ?>
                                                </select>   
                                            </div>
                                        </center>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Nome da instituição</span>
	  					<input type="text" class="form-control" id = "nomeInstituicao" name="nomeInstituicao" placeholder="Digite o seu nome da instituição" aria-describedby="sizing-addon2">
					
                                                <span class="input-group-addon" id="sizing-addon2">Curso</span>
	  					<input type="text" class="form-control" id = "nomeCurso" name="nomeCurso" placeholder="Digite o nome do curso" aria-describedby="sizing-addon2">
					
                                        </div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Supervisor de estagio</span>
	  					<input type="text" class="form-control" id = "nomeSupervisor" name="nomeSupervisor" placeholder="Digite o seu nome da instituição" aria-describedby="sizing-addon2">
                                        </div>
                                        Dados do estagio:
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Periodo de virgencia</span>
                                                <input type="date" class="form-control" id = "dataInicio" name="dataInicio" aria-describedby="sizing-addon2">
                                                à
                                                <input type="date" class="form-control" id = "dataFim" name="dataFim" aria-describedby="sizing-addon2">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="sizing-addon2">Carga Horaria</span>
                                            <select id="cargaHoraria" name="cargaHoraria">
                                                <option value="20">20h</option>
                                                <option value="30">30h</option>
                                            </select>
                                            <span class="input-group-addon" id="sizing-addon2">Valor Mensal da bolsa</span>
                                            <input type="tel" required="required" maxlength="15" class="form-control" id = "valorBolsa" name="valorBolsa" aria-describedby="sizing-addon2" pattern="([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$">
                                            
                                            <span class="input-group-addon" id="sizing-addon2">Valor Auxilio-transporte</span>
                                            <input type="number" class="form-control" id = "valorAuxilioTrasporte" name="valorAuxilioTrasporte" aria-describedby="sizing-addon2">
                                        
                                        </div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Local do estagio</span>
	  					<input type="text" class="form-control" id = "localEstagio" name="localEstagio" aria-describedby="sizing-addon2">
                                        </div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Atividades a serem desenvolvidas no local</span>
                                                <input type="text" class="form-control" id = "atividadeLocal" name="atividadeLocal"  aria-describedby="sizing-addon2">
                                        </div>
                                        <input type="submit" id = "submit" class="btn btn-default topElementos" value="Salvar" />
                                </div>
                        </form>
        </div>
        
    
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>    
    </body>
</html>