
    <?php

            /** 
                    LEMBRAR DE MUDAR OS PARAMETROS DO BANCO DE DADOS, USER E SENHA.
            */
            /** Confere se foi passado a varialve com id "pav" se existir ele ira adicionar no banco! 
                    Caso não existe ele ira redirecionar para a pagina principal!

                    Aqui anda existe uma mudança a se fazer que e uma forma de retornar para a pagina de casdastro para 
                    mostrar uma mensagem de que foi adicionado com sucesso. Deve fazer isso ate hoje de noite
            */

                    // incluindo o arquivo do banco de dados
                    include ("banco/banco.php");
                    // instanciando a classe do banco
                    //$b = new database();
                    // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
                    echo trim($_POST["cargaHoraria"]);
                    echo $_POST['programa'];
                    echo trim($_POST["cargaHoraria"]);  
                    $pessoaCpf = $_POST["pessoa"];
                    $idPrograma = $_POST["programa"];
                    $nomeInstituicao = trim($_POST["nomeInstituicao"]);
                    $nomeCurso = trim($_POST["nomeCurso"]);
                    $nomeSupervisor = trim($_POST["nomeSupervisor"]);
                    $dataInicio = trim($_POST["dataInicio"]);
                    $dataFim = trim($_POST["dataFim"]);
                    $cargaHoraria = trim($_POST["cargaHoraria"]);
                    $valorBolsa = trim($_POST["valorBolsa"]);
                    $valorAuxilioTrasporte = trim($_POST["valorAuxilioTrasporte"]);
                    $localEstagio = trim($_POST["localEstagio"]);
                    $atividadeLocal = trim($_POST["atividadeLocal"]);
                    // chamando a função query da classe banco para adicionar ao banco de dados
                        $b = "INSERT INTO bolsaestagio (pessoa_cpf,idPrograma,nomeInstituicao,curso,supervisorEstagio,dataInicio,dataFim,cargaHoraria,valorBolsa,valorAuxilioTrasporte,localEstagio,atividades) VALUES "
                            . "($pessoaCpf,$idPrograma,'$nomeInstituicao','$nomeCurso','$nomeSupervisor',$dataInicio,$dataFim,$cargaHoraria,$valorBolsa,$valorAuxilioTrasporte,'$localEstagio','$atividadeLocal')";
                    echo $b;
                    noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>