<!DOCTYPE html>
<html lang="pt">
    <?php 
    include("banco/banco.php");
    $query = "SELECT bp.idbolsaPesquisa,pe.nome, p.nome as programa, bp.autorizado FROM bolsapesquisa bp join programa p on bp.programa_idPrograma = p.idPrograma join pessoa pe on bp.pessoa_cpf = pe.cpf ";
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
            <th>Autorizado</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['idbolsaPesquisa']."</td>" ;
              echo"<td>".$row['nome']."</td>" ;
              echo"<td>".$row['programa']."</td>" ;
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
              echo"<td>".$row['idbolsaPesquisa']."</td>" ;
              echo"<td>".$row['nome']."</td>" ;
              echo"<td>".$row['programa']."</td>" ;
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
