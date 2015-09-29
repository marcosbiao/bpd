<!DOCTYPE html>
<html lang="pt">
<?php 
    include("banco/banco.php");
    $query2 = "select * from pessoa order by nome";
    $rs2 = Select ($query2);
    $row2 = mysql_fetch_array($rs2);
    ?>
    <?php include("head.php");
    $nomeUsuario = $_SESSION['UsuarioNome'];
    $idUsuario = $_SESSION['UsuarioID'];
    ?>
  <body>
    <?php include("escolheCabecario.php");?>
      
     <div class="container panel panel-default">
			</br></br>
                        <form action = "fachadaSolicitarBolsaPesquisa.php" method = "POST">
				<div class="panel panel-default jumbotron">	
					<div id="vpav"></div>
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Solicitante</span>
                                                <input type="text" required="required" class="form-control" id = "solicitante" name="solicitante"  aria-describedby="sizing-addon2" readonly="true" value="<?php echo $nomeUsuario ?>">
                                        </div>
                                        <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $idUsuario ?>">
                                        <center>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="sizing-addon2">Projetos</span> 
                                                <select id="programa" name="programa" required="required">
                                                    <option value="">--- Selecione---</option>
                                                    <?php 
                                                    $query = "select * from programa order by nome";
                                                    $rs = Select ($query);
                                                    $row = mysql_fetch_array($rs);
                                                    echo ("<option value= ". $row['idPrograma'].">". $row['nome']." </option> ");
                                                    while($row = mysql_fetch_array($rs)) { 
                                                        echo ("<option value= ". $row['idPrograma'].">". $row['nome']." </option> ");
                                                    } ?>
                                                    
                                                </select>
                                            </div>
                                        </center>

                                        
                                            <div class="input-group">
                                                <span class="input-group-addon" id="sizing-addon2">Nome</span> 
                                                <select id="pessoa" name="cpf" required="required">
                                                    <option value="">--- Selecione---</option>
                                                    <?php 
                                                    echo "<option value=' {$row2['cpf']} '> {$row2['nome']} </option> ";                                                                                                        
                                                    
                                                    while($row2 = mysql_fetch_assoc($rs2)) { 
                                                        echo "<option value=' {$row2['cpf']} '> {$row2['nome']} </option> ";
                                                    } ?>
                                                </select>                                                                                                 
                                               
                                            </div>
                                         
                                        
                                        <div class="input-group">
	  					<span class="input-group-addon" id="sizing-addon2">Nome da instituição</span>
	  					<input type="text" required="required" class="form-control" id = "nomeInstituicao" name="nomeInstituicao" placeholder="Digite o seu nome da instituição" aria-describedby="sizing-addon2">
                                        </div>
                                        
                                        
                                        <br>
                                        Dados da bolsa:
                                        <div class="input-group">
                                            <span class="input-group-addon" id="sizing-addon2">Tipo</span>
                                            <select id="tipoCurso" name="tipoCurso" required="required">
                                                <option value="">--- Selecione ---</option>
                                                <option value="Aperfeiçoamento">Aperfeiçoamento</option>
                                                <option value="Bacharelado">Bacharelado</option>
                                                <option value="Lato Sensu">Lato Sensu</option>
                                                <option value="Licenciatura">Licenciatura</option>
                                                <option value="Extensão">Extensão</option>
                                                <option value="Sequencial">Sequencial</option>
                                                <option value="Tecnologo">Tecnologo</option>
                                                <option value="Mestrado">Mestrado</option>
                                                <option value="Doutorado">Doutorado</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="sizing-addon2">Nome do Curso</span>
                                            <input type="text" required="required" placeholder="Digite o nome do cruso" class="form-control" id = "nomeCurso" name="nomeCurso"  aria-describedby="sizing-addon2">
                                            
                                            <span class="input-group-addon" id="sizing-addon2">Função no Programa- Tipo de Bolsa</span>
                                            <input type="text" required="required" placeholder="Digite a função" class="form-control" id = "funcaoPrograma" name="funcaoPrograma"  aria-describedby="sizing-addon2">
                                        </div>
                                        <div>
   <!--Trecho de codigo sujo. Gerado automaticamente por um editor html
        Porem corresponde a uma tabela com muito texto escrito    -->                                      
                                           <table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
                                            <tbody>
                                              <tr>
                                                <td><span
                                           style="font-weight: bold;">Atribui&ccedil;&otilde;es
                                          Bolsistas</span></td>
                                              </tr>
                                              <tr align="center">
                                                <td><span
                                           style="color: rgb(204, 0, 0);">A
                                          op&ccedil;&atilde;o 1 e 2 dever&aacute; &nbsp;ser
                                          assinalada de acordo com a fun&ccedil;&atilde;o &nbsp;a ser
                                          exercida.</span></td>
                                              </tr>
                                              <tr>
                                                <td>
                                                <ul>
                                                  <li>Mediar a
                                          comunica&ccedil;&atilde;o de conte&uacute;dos entre o
                                          professor e os cursistas;</li>
                                                  <li>Acompanhar as
                                          atividades discentes, conforme o cronograma do curso;</li>
                                                  <li>Apoiar o professor da
                                          disciplina no desenvolvimento das atividades docentes;</li>
                                                  <li>Estabelecer contato
                                          permanente com os alunos e mediar &agrave;s atividades discentes;</li>
                                                  <li>Colaborar com a
                                          coordena&ccedil;&atilde;o do curso na
                                          avalia&ccedil;&atilde;o dos estudantes;</li>
                                                  <li>Participar das
                                          atividades de capacita&ccedil;&atilde;o e
                                          atualiza&ccedil;&atilde;o promovidas pela
                                          Institui&ccedil;&atilde;o de Ensino;</li>
                                                  <li>Elaborar
                                          relat&oacute;rios mensais de acompanhamento dos alunos e encaminhar
                                          &agrave; coordena&ccedil;&atilde;o de tutoria;</li>
                                                  <li>Participar do processo
                                          de avalia&ccedil;&atilde;o da disciplina sob
                                          orienta&ccedil;&atilde;o do professor respons&aacute;vel;</li>
                                                  
                                                </ul>
                                                    <input type="radio" name="atribuicaoBolsista" value="Tutor a distancia" checked><span style="font-weight: bold;">Tutor a Dist&acirc;ncia:</span> Manter regularidade de acesso ao AVA e dar retorno &agrave;s solicita&ccedil;&otilde;es do cursista no prazo m&aacute;ximo de 24 horas;
                                                    <br>
                                                    <input type="radio" name="atribuicaoBolsista" value="Tutor presencial"><span style="font-weight: bold;">Tutor Presencial:</span>Apoiar operacionalmente a coordena&ccedil;&atilde;o do curso nas atividades presenciais nos p&oacute;los, em especial na aplica&ccedil;&atilde;o de avalia&ccedil;&otilde;es.

                                                </td>
                                              </tr>
                                              <tr>
                                                <td><span
                                           style="font-weight: bold;">Declara&ccedil;&atilde;o</span></td>
                                              </tr>
                                              <tr>
                                                <td>Declaro ter
                                          ci&ecirc;ncia dos direitos e das obriga&ccedil;&otilde;es
                                          inerentes &agrave; qualidade de bolsista na
                                          fun&ccedil;&atilde;o de TUTOR e nesse sentido, COMPROMETO-ME a
                                          respeitar as cl&aacute;usulas descritas nas
                                          atribui&ccedil;&otilde;es do bolsista deste Termo de
                                          Compromisso. Declaro, ainda, sob as penas da lei, que as
                                          informa&ccedil;&otilde;es prestadas s&atilde;o a
                                          express&atilde;o da verdade e que preencho plenamente os requisitos
                                          expressos na Lei 11.273/ 2006 e da Lei 11.502/2007, para o recebimento
                                          da bolsa e que o recebimento da referida bolsa n&atilde;o
                                          constituir&aacute; ac&uacute;mulo de bolsa de estudo ou
                                          pesquisa conforme disposto no artigo 1&ordm; inciso III da lei
                                          11.273/2006 exceto os casos disciplinados pelas portarias conjuntas
                                          CAPES/CNPQ N&uacute;mero 01 de dezembro de 2007 e portaria
                                          N&uacute;mero 02 de 10 de abril de 2013 e:<br>
                                                <br>
                                                <div>
                                                <input type="checkbox" name="declaracao1" value="1">Que possuo formação de nível superior e tenho experiência no magistério do ensino básico
                                                ou superior: <strong>Numero de anos de experiencia</strong> <input type="text" name="numeroAnos" size="1">
                                                </div>
                                                <input type="checkbox" name="declaracao2" value="2">Formação de nível superior e vínculo a programa de pós-graduação
                                                <br>
                                                <input type="checkbox" name="declaracao3" value="3">Formação de nível superior e Formação pós-graduada
                                                <br>
                                          Estou ciente, tamb&eacute;m, que a inobserv&acirc;ncia dos
                                          requisitos citados acima implicar&aacute;(&atilde;o) no
                                          cancelamento da(s) bolsa(s), com a restitui&ccedil;&atilde;o
                                          integral e imediata dos recursos, de acordo com as regras prevista na
                                          Resolu&ccedil;&atilde;o FNDE/CD n&ordm; 26 de 06 de junho
                                          de 2009 com reda&ccedil;&atilde;o atualizada pela
                                          resolu&ccedil;&atilde;o FNDE/CD n&ordm; 8 de 30 de abril de
                                          2010 e que o n&atilde;o cumprimento dos dispositivos legais
                                          acarretar&aacute; na suspens&atilde;o, por cinco anos, do
                                          bolsista para recebimento de bolsas no &acirc;mbito da CAPES.</td>
                                              </tr>
                                            </tbody>
                                          </table>


                                        </div>
                                        <input type="submit" id = "submit" class="btn btn-default topElementos" value="Salvar" />
                                </div>
                        </form>
        </div> 
      
      
    <?php include("script.html"); ?>
    <?php include("foot.html"); ?>
  </body>
</html>
