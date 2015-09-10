<?php

include ("banco/banco.php");
$idPrograma = $_POST["programa"];

    $query = "SELECT sum(`valorBolsa`+ `valorAuxilioTrasporte`) FROM `bolsaestagio` = $idPrograma";
    //echo $query;
    noQuery($query);
?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>