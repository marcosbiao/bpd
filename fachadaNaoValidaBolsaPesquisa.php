<?php

include ("banco/banco.php");
$idbolsaPesquisa = $_POST["idbolsaPesquisa"];

    $query = "UPDATE `bolsapesquisa` SET `autorizado`= 2 WHERE `idbolsaPesquisa` = $idbolsaPesquisa";
    //echo $query;
    noQuery($query);
?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>