<?php

include ("banco/banco.php");
$idDiaria = $_POST["idDiaria"];

    $query = "UPDATE `diaria` SET `autorizado`= 2 WHERE `idDiaria` = $idDiaria";
    //echo $query;
    noQuery($query);
?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>