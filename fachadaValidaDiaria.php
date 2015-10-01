<?php

include ("banco/banco.php");
$idDiaria = $_POST["idDiaria"];
$valorDiaria = $_POST["valorDiaria"];

    $query = "UPDATE `diaria` SET `autorizado`= 1,valorDiaria=$valorDiaria WHERE `idDiaria` = $idDiaria";
    //echo $query;
    noQuery($query);
?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>