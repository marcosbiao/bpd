 <?php

                    // incluindo o arquivo do banco de dados
                    include ("banco/banco.php");
                    // instanciando a classe do banco
                    //$b = new database();
                    // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
                    
                    $Solicitante = trim($_POST["solicitante"]);
                    $idUsuario = trim($_POST["idUsuario"]);
                    $idPrograma = trim($_POST["programa"]);
                    $cpf = trim($_POST["pessoa"]);
                    $cidadeOrigem = trim($_POST["cidadeOrigem"]);
                    $cidadeDestino = trim($_POST["cidadeDestino"]);
                    $dataSaida = trim($_POST["dataSaida"]);
                    $dataRetorno= trim($_POST["dataRetorno"]);
                    $atividadeLocal= trim($_POST["atividadeLocal"]);
                    // chamando a função query da classe banco para adicionar ao banco de dados
                    $b = "INSERT INTO diaria (usuarioSolicitante,usuario_idUsuario,pessoa_cpf,programa_idPrograma,cidadeOrigem,cidadeDestino,dataSaida,dataRetorno,atividadeDesenvolvida,autorizado) "
                            . "VALUES ('$Solicitante',$idUsuario,$cpf,$idPrograma,'$cidadeOrigem','$cidadeDestino','$dataSaida','$dataRetorno','$atividadeLocal',0)";
                    //echo $b;
                    noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>