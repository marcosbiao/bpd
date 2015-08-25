<!DOCTYPE html>
<html lang="pt">
<?php 
    include("banco/banco.php");
    $query = "SELECT `idbolsaEstagio`, `pessoa_cpf`, `idPrograma`, `cargaHoraria`, `valorBolsa`, `autorizado` FROM `bolsaestagio` where `autorizado`=0";
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
            <th>Cpf</th>
            <th>Programa</th>
            <th>Carga horaria</th>
            <th>Valor bolsa</th>
            <th>Autorizado</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['idbolsaEstagio']."</td>" ; 
              echo"<td>".$row['pessoa_cpf']."</td>" ;
              echo"<td>".$row['idPrograma']."</td>" ;
              echo"<td>".$row['cargaHoraria']."</td>" ;
              echo"<td>".$row['valorBolsa']."</td>" ;
              echo"<td>".$row['autorizado']."</td>" ;
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';   
              echo"<td>".$row['idbolsaEstagio']."</td>" ; 
              echo"<td>".$row['pessoa_cpf']."</td>" ;
              echo"<td>".$row['idPrograma']."</td>" ;
              echo"<td>".$row['cargaHoraria']."</td>" ;
              echo"<td>".$row['valorBolsa']."</td>" ;
              echo"<td>".$row['autorizado']."</td>" ;
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
</div>
      
    <?php include("script.html"); ?>
    <?php include("foot.html"); ?>
  </body>
</html>
