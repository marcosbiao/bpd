<?php

include ("banco/banco.php");
$idpassagem = $_POST["idpassagem"];

    $query = "UPDATE `passagem` SET `autorizado`= 2 WHERE `idpassagem` = $idpassagem";
    //echo $query;
    noQuery($query);
?>
<script>
    
    window.location = "telaPrincipal.php"
    
</script>