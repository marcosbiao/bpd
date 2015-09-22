<!DOCTYPE html>
<html lang="pt">
<?php 
    include("banco/banco.php");
    $query = "SELECT pa.idpassagem, p.nome, pr.nome as programa, pa.cidadeDestino,pa.tipoPassagem,pa.autorizado FROM passagem pa join programa pr on pa.programa_idPrograma = pr.idPrograma join pessoa p on p.cpf = pa.pessoa_cpf where pa.autorizado = 0";
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
            <th>Nome</th>
            <th>Programa</th>
            <th>Cidade Destino</th>
            <th>Tipo da Passagem</th>
            <th>Autorizado</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['idpassagem']."</td>" ; 
              echo"<td>".$row['nome']."</td>" ;
              echo"<td>".$row['programa']."</td>" ;
              echo"<td>".$row['cidadeDestino']."</td>" ;
              echo"<td>".$row['tipoPassagem']."</td>" ;
              echo"<td>".$row['autorizado']."</td>" ;
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';   
              echo"<td>".$row['idpassagem']."</td>" ; 
              echo"<td>".$row['nome']."</td>" ;
              echo"<td>".$row['programa']."</td>" ;
              echo"<td>".$row['cidadeDestino']."</td>" ;
              echo"<td>".$row['tipoPassagem']."</td>" ;
              echo"<td>".$row['autorizado']."</td>" ;
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
</div>
    <div>
            <form action="fachadaValidaPassagem.php" method="POST">
                <center>
                        <div>
                            <label>Digite o codigo que deseja validar</label>
                            <input type="text" name="idpassagem" id="idpassagem" required="required">
                        </div>

                        <div>
                            <input type="submit" value="Validar">
                        </div>
                    </center>
            </form>
        
        <form action="fachadaNaoValidaPassagem.php" method="POST">
                    <center>
                            <div>
                                <label>Digite o codigo que deseja não validar</label>
                                <input type="text" name="idpassagem" id="idpassagem" required="required">
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
