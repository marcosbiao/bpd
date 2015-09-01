
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
                    $cpf = trim($_POST["textFieldCpf"]);
                    $nome = trim($_POST["textFieldNome"]);
                    $email = trim($_POST["textFieldEmail"]);
                    $rg = trim($_POST["textFieldRg"]);
                    $orgaoEmissor = trim($_POST["textFieldOrgaoEmissor"]);
                    $dataEmissaoRg = trim($_POST["textFieldEmitido"]);
                    $estado = trim($_POST["textFieldEstado"]);
                    $cidade = trim($_POST["textFieldCidade"]);
                    $bairro = trim($_POST["textFieldBairro"]);
                    $cep = trim($_POST["textFieldCep"]);
                    $endereco = trim($_POST["textFieldEndereco"]);
                    $contato = trim($_POST["textFieldContato"]);
                    $pis = trim($_POST["textFieldPis"]);
                    $inscrisaoMunicipal = trim($_POST["textFieldInscrisaoMunicipal"]);
                    $escolaridade = trim($_POST["escolaridade"]);
                    $profissao = trim($_POST["textFieldProfissao"]);
                    $codBanco = trim($_POST["textFieldCodBanco"]);
                    $nomeBanco = trim($_POST["textFieldBanco"]);
                    $agencia = trim($_POST["textFieldAgencia"]);
                    $conta = trim($_POST["textFieldConta"]);
                    $tipoConta = trim($_POST["tipo"]);


                    // chamando a função query da classe banco para adicionar ao banco de dados
                    $b = "INSERT INTO pessoa (cpf,nome,email,rg,orgaoEmissor,dataEmissaoRg,estado,cidade,bairro,cep,endereco,contato,numeroPis,inscricaoMunicipal,escolaridade,profissao,codBanco,nomeBanco,agencia,conta,tipoConta) VALUES "
                            . "($cpf,'$nome','$email',$rg,'$orgaoEmissor','$dataEmissaoRg','$estado','$cidade','$bairro',$cep,'$endereco','$contato',$pis,$inscrisaoMunicipal,'$escolaridade','$profissao',$codBanco,'$nomeBanco','$agencia','$conta','$tipoConta')";
                    //echo $b;
                    noQuery($b);
    ?>

<script>
    
    window.location = "telaPrincipal.php"
    
</script>