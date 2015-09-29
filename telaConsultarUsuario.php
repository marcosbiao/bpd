<html lang="pt">
    
    <?php 
    include("banco/banco.php");
    $query = "Select * from usuario order by login";
    $rs = Select ($query);
    $row = mysql_fetch_array($rs);
    ?>
    <?php include("head.php");  ?>
    
    <body>
        <?php include("escolheCabecario.php"); ?>
        <h3>Consulta de Beneficiario</h3>
        
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
            <th>ID Usuario</th>  
            <th>Nome</th>
            <th>Login</th>
            <th>Nivel</th>
            <th>Ativo</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['idUsuario']."</td>" ;
              echo"<td>".$row['nomeUsuario']."</td>" ; 
              echo"<td>".$row['login']."</td>" ;
              if($row['nivel']== 1){
                  echo"<td>Administrador</td>" ;
              }elseif($row['nivel']== 2){
                  echo"<td>Coordenador</td>" ;
              }
              if($row['ativo']== 1){
                  echo"<td>Ativo</td>" ;
              }elseif($row['ativo']== 2){
                  echo"<td>Não ativo</td>" ;
              }
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';   
              echo"<td>".$row['idUsuario']."</td>" ; 
              echo"<td>".$row['nomeUsuario']."</td>" ; 
              echo"<td>".$row['login']."</td>" ;
              if($row['nivel']== 1){
                  echo"<td>Administrador</td>" ;
              }elseif($row['nivel']== 2){
                  echo"<td>Coordenador</td>" ;
              }
              if($row['ativo']== 1){
                  echo"<td>Ativo</td>" ;
              }elseif($row['ativo']== 2){
                  echo"<td>Não ativo</td>" ;
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