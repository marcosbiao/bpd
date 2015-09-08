<!DOCTYPE html>
<html lang="pt">
    <?php 
    include("banco/banco.php");
    $query = "Select be.idBolsaEstagio,be.pessoa_cpf,p.nome,be.programa_idPrograma,be.autorizado from bolsaestagio be join pessoa p where be.pessoa_cpf = p.cpf ";
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
            <th>Cpf</th>
            <th>Programa</th>
            <th>Autorizado</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['idBolsaEstagio']."</td>" ;
              echo"<td>".$row['nome']."</td>" ;
              echo"<td>".$row['pessoa_cpf']."</td>" ;
              echo"<td>".$row['programa_idPrograma']."</td>" ;
              if($row['autorizado']==1){
                  echo"<td>Autorizado</td>" ;
              }elseif ($row['autorizado']==2) {
                  echo"<td>Negado</td>" ;
              }elseif ($row['autorizado']==0) {
                  echo"<td>Em analise</td>" ;
              }
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';   
              echo"<td>".$row['idBolsaEstagio']."</td>" ;
              echo"<td>".$row['nome']."</td>" ;
              echo"<td>".$row['pessoa_cpf']."</td>" ;
              echo"<td>".$row['programa_idPrograma']."</td>" ;
              if($row['autorizado']==1){
                  echo"<td>Autorizado</td>" ;
              }elseif ($row['autorizado']==2) {
                  echo"<td>Negado</td>" ;
              }elseif ($row['autorizado']==0) {
                  echo"<td>Em analise</td>" ;
              }
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
