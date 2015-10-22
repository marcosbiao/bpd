
    <?php

                    // incluindo o arquivo do banco de dados
                    include ("banco/banco.php");
                    // instanciando a classe do banco
                    //$b = new database();
                    // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
                    $Solicitante = trim($_POST["solicitante"]);
                    $idUsuario = trim($_POST["idUsuario"]);
                    $idPrograma = trim($_POST["programa"]);
                    $cpf = trim($_POST["cpf"]);
                    $nomeInstituicao = trim($_POST["nomeInstituicao"]);
                    $tipoCursoVinculado = trim($_POST["tipoCurso"]);
                    $nomeCursoVinculado = trim($_POST["nomeCurso"]);
                    $funcaoPrograma = trim($_POST["funcaoPrograma"]);
                    $atribuicaoBolsista = trim($_POST["atribuicaoBolsista"]);
                    $dataInicio = ($_POST["dataInicio"]);
                    $dataFim = ($_POST["dataFim"]);
                    
                            $arr = explode('/',$dataInicio);

                            $arr2 = explode('/',$dataFim);

                            $dia1 = $arr[2];

                            $mes1 = $arr[1];

                            $ano1 = $arr[0];

                            $dia2 = $arr2[2];

                            $mes2 = $arr2[1];

                            $ano2 = $arr2[0];

                            $a1 = ($ano2 - $ano1)*12;

                            $m1 = ($mes2 - $mes1)+1;

                            $m3 = ($m1 + $a1);

                            echo "<br>total de meses=". $m3;
                    
                    $declaracao1=0;
                    if(isset($_POST["declaracao1"])){
                        $declaracao1 = trim($_POST["declaracao1"]);
                    }
                    $declaracao2=0;
                    if(isset($_POST["declaracao2"])){
                        $declaracao1 = trim($_POST["declaracao2"]);
                    }
                    $declaracao3=0;
                    if(isset($_POST["declaracao3"])){
                        $declaracao1 = trim($_POST["declaracao3"]);
                    }
                    if($_POST["numeroAnos"]!= ""){
                        $numeroAnos = trim($_POST["numeroAnos"]);
                    }else{
                        $numeroAnos=0;
                    }
                    //$dataCadastro = ;
                    //echo $dataCadastro;
                    // chamando a função query da classe banco para adicionar ao banco de dados
                    $b = "INSERT INTO bolsapesquisa (usuarioSolicitante,usuario_idUsuario,pessoa_cpf,programa_idPrograma,nomeInstituicao,tipoCursoVinculado,nomeCursoVinculado,funcaoPrograma,atribuicaoBolsista,declaracao1,declaracao2,declaracao3,numeroAnos,dataInicio,dataFim,numeroMeses) VALUES "
                            . "('$Solicitante',$idUsuario,$cpf,$idPrograma,'$nomeInstituicao','$tipoCursoVinculado','$nomeCursoVinculado','$funcaoPrograma','$atribuicaoBolsista',$declaracao1,$declaracao2,$declaracao3,$numeroAnos,'$dataInicio','$dataFim',$m3)";
                    //echo $b;
                    noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>