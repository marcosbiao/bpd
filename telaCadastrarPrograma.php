<html lang="pt">


    <?php include("head.html");  ?>
    <body>
       <?php  include("cabecario.html");  ?>
        
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