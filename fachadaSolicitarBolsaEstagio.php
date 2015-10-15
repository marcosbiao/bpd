
    <?php

            /** 
                    LEMBRAR DE MUDAR OS PARAMETROS DO BANCO DE DADOS, USER E SENHA.
            */
            /** Confere se foi passado a varialve com id "pav" se existir ele ira adicionar no banco! 
                    Caso não existe ele ira redirecionar para a pagina principal!

                    Aqui anda existe uma mudança a se fazer que e uma forma de retornar para a pagina de casdastro para 
                    mostrar uma mensagem de que foi adicionado com sucesso. Deve fazer isso ate hoje de noite
            */
                    date_default_timezone_set('America/Sao_Paulo');
                    // incluindo o arquivo do banco de dados
                    include ("banco/banco.php");
                    // instanciando a classe do banco
                    //$b = new database();
                    // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
                     
                    $Solicitante = trim($_POST["solicitante"]);
                    $idUsuario = trim($_POST["idUsuario"]);
                    $pessoaCpf = $_POST["pessoa"];
                    $idPrograma = $_POST["programa"];
                    $nomeInstituicao = trim($_POST["nomeInstituicao"]);
                    $nomeCurso = trim($_POST["nomeCurso"]);
                    $nomeSupervisor = trim($_POST["nomeSupervisor"]);
                    $dataInicio = trim($_POST["dataInicio"]);
                    $dataFim = trim($_POST["dataFim"]);
                    echo $dataInicio;
                    echo "   ";
                    echo $dataFim;

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
                            
                    $cargaHoraria = trim($_POST["cargaHoraria"]);
                    $valorBolsa = trim($_POST["valorBolsa"]);
                    $valorAuxilioTrasporte = trim($_POST["valorAuxilioTrasporte"]);
                    $localEstagio = trim($_POST["localEstagio"]);
                    $atividadeLocal = trim($_POST["atividadeLocal"]);
                    // chamando a função query da classe banco para adicionar ao banco de dados
                        $b = "INSERT INTO bolsaestagio (usuarioSolicitante,usuario_idUsuario,pessoa_cpf,programa_idPrograma,nomeInstituicao,curso,supervisorEstagio,dataInicio,dataFim,cargaHoraria,valorBolsa,valorAuxilioTrasporte,localEstagio,atividades,numeroMeses) VALUES "
                            . "('$Solicitante',$idUsuario,$pessoaCpf,$idPrograma,'$nomeInstituicao','$nomeCurso','$nomeSupervisor','$dataInicio','$dataFim',$cargaHoraria,$valorBolsa,$valorAuxilioTrasporte,'$localEstagio','$atividadeLocal',$m3)";
                    //echo $b;
                    noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>