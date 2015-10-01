<?php

include ("banco/banco.php");
$idbolsaPesquisa = $_POST["idbolsaPesquisa"];
$valorPesquisa = $_POST["valorPesquisa"];

    $query = "UPDATE `bolsapesquisa` SET `autorizado`= 1, valorPesquisa = $valorPesquisa  WHERE `idbolsaPesquisa` = $idbolsaPesquisa";
    //echo $query;
    noQuery($query);
?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>