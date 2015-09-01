<html lang="pt">


    <?php include("head.php");  ?>
    <body>
       <?php  include("escolheCabecario.php");  ?>
        
        <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaCadastrarPrograma.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
					<h3>Dados obrigatorios</h3>
					<div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Nome</span>
	  					<input type="text" class="form-control"  id="textFieldCpf" name="textFieldNome" placeholder="Digite o nome do programa" aria-describedby="sizing-addon2">
					</div>
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Data</span>
                                                <input type="date" class="form-control" pattern="[0-9]{4}/[0-9]{2}/[0-9]{2}" maxlength="10" min="2012-01-01" max="2020-01-01" placeholder="YYYY/MM/DD" aria-describedby="sizing-addon2" name="textFieldData"/>
					</div>
                                        <div>
                                            <input type="submit" id = "bm" class="btn btn-default topElementos" value="Salvar" />
                                        </div>
                                </div>
                        </form>
        </div>
        
        <?php include("script.html"); ?>
        <?php include("foot.html"); ?>    
    </body>
</html>