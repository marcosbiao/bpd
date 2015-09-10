 <?php

                    // incluindo o arquivo do banco de dados
                    include ("banco/banco.php");
                    // instanciando a classe do banco
                    //$b = new database();
                    // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
                    
                    $idPrograma = trim($_POST["programa"]);
                    $cpf = trim($_POST["pessoa"]);
                    $tipoPassagem = trim($_POST["tipoPassagem"]);
                    $atividadeLocal = trim($_POST["atividadeLocal"]);
                    $cidadeOrigem = trim($_POST["cidadeOrigem"]);
                    $cidadeDestino = trim($_POST["cidadeDestino"]);
                    $dataSaida = trim($_POST["dataSaida"]);
                    $horaPretendida = trim($_POST["horaPretendida"]);
                    if(isset($_POST["idaVolta"])){
                        $idaVolta = 1;
                        $dataRetorno = trim($_POST["dataRetorno"]);
                        $horaRetorno = trim($_POST["horaRetorno"]);
                    }else{
                        $idaVolta = 0;
                        $dataRetorno = 0;
                        $horaRetorno = 0;
                    }
                    $observacao = trim($_POST["observacao"]);
                    $dataSolicitacao = 0;
                    // chamando a função query da classe banco para adicionar ao banco de dados
                    $b = "INSERT INTO `passagem`(`pessoa_cpf`, `programa_idPrograma`, `tipoPassagem`,`atividadeLocal`, `cidadeOrigem`, `cidadeDestino`, `dataSaida`, `horaPretendida`, `idaVolta`, `dataRetorno` , `horaRetorno`, `observacao`,`autorizado`, `dataSolicitacao`) "
                            . "VALUES($cpf,$idPrograma,'$tipoPassagem','$atividadeLocal','$cidadeOrigem','$cidadeDestino','$dataSaida','$horaPretendida',$idaVolta,'$dataRetorno','$horaRetorno','$observacao',0,$dataSolicitacao)";
                    //echo $b;
                    noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>