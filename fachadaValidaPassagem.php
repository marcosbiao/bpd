<?php

include ("banco/banco.php");
$idpassagem = $_POST["idpassagem"];
$valorPassagem = $_POST["valorPassagem"];

    $query = "UPDATE `passagem` SET `autorizado`= 1, valorPassagem = $valorPassagem WHERE `idpassagem` = $idpassagem";
    //echo $query;
    noQuery($query);
?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>