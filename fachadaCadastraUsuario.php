<?php

  // incluindo o arquivo do banco de dados
                    include ("banco/banco.php");
                    // instanciando a classe do banco
                    //$b = new database();
                    // pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
                    $nomeUsuario= trim($_POST["nomeUsuario"]);
                    $login = trim($_POST["textFieldLogin"]);
                    $senha = trim($_POST["textFieldSenha"]);
                    $nivel = trim($_POST["nivel"]);
                    
                    //$data2 = explode("-" or "/" or "." ,$data); 
                    //$data = implode("",$data2);
                    // chamando a função query da classe banco para adicionar ao banco de dados
                    $b = "INSERT INTO usuario (nomeUsuario,login,senha,nivel,ativo) VALUES ('$nomeUsuario','$login','$senha',$nivel,1)";
                    //echo $b;
                    noQuery($b);
?>

<script>
    
    window.location = "telaPrincipal.php"
    
</script>