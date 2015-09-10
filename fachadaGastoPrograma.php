<?php

include ("banco/banco.php");
$idPrograma = $_POST["programa"];

    $query = "UPDATE `diaria` SET `autorizado`= 1 WHERE `idDiaria` = $idDiaria";
    //echo $query;
    noQuery($query);
?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>