
    <?php

                    // incluindo o arquivo do banco de dados
                    include ("banco/banco.php");
                    // instanciando a classe do banco
                    //$b = new database();
                    // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
                    
                    $nome = trim($_POST["textFieldNome"]);
                    $data = trim($_POST["textFieldData"]);
                    echo $data;
                    //$data2 = explode("-" or "/" or "." ,$data); 
                    //$data = implode("",$data2);
                    // chamando a função query da classe banco para adicionar ao banco de dados
                    $b = "INSERT INTO programa (nome,data) VALUES ('$nome','$data')";
                    //echo $b;
                    noQuery($b);
    ?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>