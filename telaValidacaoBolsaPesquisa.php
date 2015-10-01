<!DOCTYPE html>
<html lang="pt">
<?php 
    include("banco/banco.php");
    $query = "SELECT bp.idbolsaPesquisa,bp.usuarioSolicitante,pe.nome, p.nome as programa, bp.autorizado FROM bolsapesquisa bp join programa p on bp.programa_idPrograma = p.idPrograma join pessoa pe on bp.pessoa_cpf = pe.cpf where bp.autorizado=0 ";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    <?php include("head.php"); ?>
     
  <body>
    
    <?php include("escolheCabecario.php");?>
      
    <div class="panel panel-default">
  <!-- Default panel contents -->
  
  <div class="panel-body">
   <!-- <p> ... </p>    -->
  </div>
  <!-- Table -->
  <table class="table table-striped table-bordered table-condensed"> 
      <!--<caption>Consulta de Beneficiario</caption> -->
      <thead>
          <tr>
            <th>Codigo</th>
            <th>Solicitante</th>
            <th>Beneficiado</th>
            <th>Programa</th>
            <th>Autorizado</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['idbolsaPesquisa']."</td>";
              echo"<td>".$row['usuarioSolicitante']."</td>" ;
              echo"<td>".$row['nome']."</td>" ;
              echo"<td>".$row['programa']."</td>" ;
              echo"<td>".$row['autorizado']."</td>" ;
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';   
              echo"<td>".$row['idbolsaPesquisa']."</td>" ; 
              echo"<td>".$row['usuarioSolicitante']."</td>" ;
              echo"<td>".$row['nome']."</td>" ;
              echo"<td>".$row['programa']."</td>" ;
              echo"<td>".$row['autorizado']."</td>" ;
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
</div>
    <div>
            <form action="fachadaValidaBolsaPesquisa.php" method="POST">
                <center>
                        <div>
                            <label>Digite o codigo que deseja validar</label>
                            <input type="text" name="idbolsaPesquisa" id="idbolsaPesquisa" required="required">
                        </div>
                        <div>
                            <label>Valor da bolsa pesquisa</label>
                            <input type="text" name="valorPesquisa" id="valorPesquisa" required="required">
                        </div>

                        <div>
                            <input type="submit" value="Validar">
                        </div>
                    </center>
            </form>
        
        <form action="fachadaNaoValidaBolsaPesquisa.php" method="POST">
                    <center>
                            <div>
                                <label>Digite o codigo que deseja não validar</label>
                                <input type="text" name="idbolsaPesquisa" id="idbolsaPesquisa" required="required">
                            </div>

                            <div>
                                <input type="submit" value="Não validar">
                            </div>
                        </center>
                </form>
        </div>
    <?php include("script.html"); ?>
    <?php include("foot.html"); ?>
  </body>
</html>
