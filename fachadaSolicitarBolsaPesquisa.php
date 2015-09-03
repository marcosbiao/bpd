
    <?php

                    // incluindo o arquivo do banco de dados
                    include ("banco/banco.php");
                    // instanciando a classe do banco
                    //$b = new database();
                    // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
                    
                    $idPrograma = trim($_POST["programa"]);
                    $cpf = trim($_POST["cpf"]);
                    $nomeInstituicao = trim($_POST["nomeInstituicao"]);
                    $tipo = trim($_POST["tipo"]);
                    $classificacao = trim($_POST["classificacao"]);
                    $dataInicio = trim($_POST["dataInicio"]);
                    $dataFim = trim($_POST["dataFim"]);
                    $valorBolsa = trim($_POST["valorBolsa"]);
                    $atividadeLocal = trim($_POST["atividadeLocal"]);
                    // chamando a função query da classe banco para adicionar ao banco de dados
                    $b = "INSERT INTO bolsapesquisa (pessoa_cpf,programa_idPrograma,nomeInstituicao,tipo,classificacao,dataInicio,dataFim,valorBolsa,atividadeLocal) VALUES "
                            . "($cpf,$idPrograma,'$nomeInstituicao','$tipo','$classificacao','$dataInicio','$dataFim','$valorBolsa','$atividadeLocal')";
                    //echo $b;
                    noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>