<!DOCTYPE html>
<html lang="pt">
<?php 
    include("banco/banco.php");
    $query2 = "select * from pessoa order by nome";
    $rs2 = Select ($query2);
    $row2 = mysql_fetch_array($rs2);
    ?>
    <?php include("head.php"); ?>
  <body>
    <?php include("escolheCabecario.php");?>
      
     <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaSolicitarBolsaPesquisa.php" method = "POST">
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
                                         
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Nome da instituição</span>
	  					<input type="text" required="required" class="form-control" id = "nomeInstituicao" name="nomeInstituicao" placeholder="Digite o seu nome da instituição" aria-describedby="sizing-addon2">
                                        </div>
                                        
                                        
                                        <br>
                                        Dados da bolsa:
                                        <div class="input-group">
                                            <span class="input-group-addon" id="sizing-addon2">Tipo</span>
                                            <input type="radio" name="tipo" value="discente" checked>Discente
                                            <br>
                                            <input type="radio" name="tipo" value="servidor">Servidor
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="sizing-addon2">Classificação</span>
                                            <input type="radio" name="classificação" value="discente" checked>Pesquisa
                                            <input type="radio" name="classificação" value="ensino">Ensino
                                            <input type="radio" name="classificação" value="extensão">Extensão
                                            <input type="radio" name="classificação" value="graduação">Graduação ou Pos-graduação
                                        </div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Periodo de virgencia</span>
                                                <input type="date" required="required" class="form-control" maxlength="10" placeholder="YYYY/MM/DD" aria-describedby="sizing-addon2" id = "dataInicio" name="dataInicio">
                                                à
                                                <input type="date" required="required" class="form-control" maxlength="10" placeholder="YYYY/MM/DD" aria-describedby="sizing-addon2" id = "dataFim" name="dataFim">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="sizing-addon2">Valor Mensal da bolsa</span>
                                            <input type="text" required="required" pattern="[0-9]+$" required="required"  class="form-control" id = "valorBolsa" name="valorBolsa" aria-describedby="sizing-addon2">
              
                                        </div>
                                       
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Atividades a serem desenvolvidas no local</span>
                                                <input type="text" required="required" class="form-control" id = "atividadeLocal" name="atividadeLocal"  aria-describedby="sizing-addon2">
                                        </div>
                                        <input type="submit" id = "submit" class="btn btn-default topElementos" value="Salvar" />
                                </div>
                        </form>
        </div> 
      
      
    <?php include("script.html"); ?>
    <?php include("foot.html"); ?>
  </body>
</html>
