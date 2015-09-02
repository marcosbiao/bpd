<html lang="pt">
    
    <?php 
    include("banco/banco.php");
    $query = "Select nome,email,nascimento,cpf,rg from pessoa order by nome";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    <?php include("head.php");  ?>
    
    <body>
        <?php include("escolheCabecario.php"); ?>
        
        
        <div class="container panel panel-default">
        <div class="panel panel-default">
  <!-- Default panel contents -->
  
  <div class="panel-body">
   <!-- <p> ... </p>    -->
  </div>
  <!-- Table -->
  <table class="table table-striped table-bordered table-condensed"> 
      <caption>Consulta de Beneficiario</caption>
      <thead>
          <tr>
            <th>Nome</th>  
            <th>Email</th>
            <th>Cpf/Passaporte</th>
            <th>RG</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['nome']."</td>" ; 
              echo"<td>".$row['email']."</td>" ;
              echo"<td>".$row['cpf']."</td>" ;
              echo"<td>".$row['rg']."</td>" ;
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';   
              echo"<td>".$row['nome']."</td>" ; 
              echo"<td>".$row['email']."</td>" ;
              echo"<td>".$row['cpf']."</td>" ;
              echo"<td>".$row['rg']."</td>" ;
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
</div>
        </div>
        
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
    
    
</html>