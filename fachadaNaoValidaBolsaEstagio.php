<?php

include ("banco/banco.php");
$idBolsaEstagio = $_POST["idbolsaEstagio"];

    $query = "UPDATE `bolsaestagio` SET `autorizado`= 2 WHERE `idbolsaEstagio` = $idBolsaEstagio";
    //echo $query;
    noQuery($query);
?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>