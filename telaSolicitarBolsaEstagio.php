<html lang="pt">
    <?php 
    include("banco/banco.php");
    $query = "select nome from programa";
    $rs = Select ($query);
    $row = mysql_fetch_assoc($rs);
    ?>

    <?php include("head.html");  ?>
    <body>
       <?php  include("cabecario.html");  ?>
        <h3>Solicitação de Estagio</h3>
        
    <center>
        <div>
            Projetos: 
            <select id="programa" name="programa">
                <?php while($row = mysql_fetch_assoc($rs)) { 
                echo "<option value= {$rs['idPrograma']} > {$rs['nome']} </option> ";
                } ?>
            </select>
        </div>
    </center>
        
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>    
    </body>
</html>