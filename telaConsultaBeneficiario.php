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
            <th>Nome</th>  
            <th>Email</th>
            <th>Nascimento</th>
            <th>Cpf/Passaporte</th>
            <th>RG</th>
          </tr>
      </thead>
      <tbody>
          <?php 
          echo '<tr>';   
              echo"<td>".$row['nome']."</td>" ; 
              echo"<td>".$row['email']."</td>" ;
              echo"<td>".$row['nascimento']."</td>" ;
              echo"<td>".$row['cpf']."</td>" ;
              echo"<td>".$row['rg']."</td>" ;
              echo "</tr>";
          while($row = mysql_fetch_array($rs)){
              echo '<tr>';   
              echo"<td>".$row['nome']."</td>" ; 
              echo"<td>".$row['email']."</td>" ;
              echo"<td>".$row['nascimento']."</td>" ;
              echo"<td>".$row['cpf']."</td>" ;
              echo"<td>".$row['rg']."</td>" ;
              echo "</tr>";
          }
          ?>
      </tbody>
  </table>
</div>
        <div>
            <form action="validaBolsaEstagio.php" method="POST">
                <center>
                        <div>
                            <label>Digite o codigo que deseja validar</label>
                            <input type="text" name="idbolsaEstagio" id="idbolsaEstagio">
                        </div>

                        <div>
                            <input type="submit" value="Login">
                        </div>
                    </center>
            </form>
        </div>
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>
    </body>
    
    
    
</html>