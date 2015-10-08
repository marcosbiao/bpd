<?php

include ("banco/banco.php");
$idPrograma = $_POST["programa"];

    //echo $idPrograma;
    $query = "SELECT nome FROM `programa` where idPrograma = $idPrograma";
    $Rnome = Select($query);
    $nome = mysql_fetch_array($Rnome);
    //echo $nome['nome'];
    $query = "SELECT sum(`valorBolsa`+ `valorAuxilioTrasporte`) as valor FROM `bolsaestagio` where programa_idPrograma = $idPrograma";
    $RvalorBolsaEstagio = Select($query);
    $valorBolsaEstagio = mysql_fetch_array($RvalorBolsaEstagio);
    //echo $valorBolsaEstagio['valor'];
    $query = "SELECT sum(`valorPesquisa`) as valorPesquisa FROM `bolsapesquisa` where programa_idPrograma = $idPrograma";
    $RvalorBolsaPesquisa = Select($query);
    $valorBolsaPesquisa = mysql_fetch_array($RvalorBolsaPesquisa);
    //echo $valorBolsaPesquisa['valorPesquisa'];
    $query = "SELECT sum(`valorDiaria`)as valorDiaria FROM `diaria` where programa_idPrograma = $idPrograma";
    $RvalorDiaria = Select($query);
    $valorDiaria = mysql_fetch_array($RvalorDiaria);
    //echo $valorDiaria['valorDiaria'];
    $query = "SELECT sum(`valorPassagem`)as valorPassagem FROM `passagem` where programa_idPrograma = $idPrograma";
    $RvalorPassagem = Select($query);
    $valorPassagem = mysql_fetch_array($RvalorPassagem);
    //echo $valorPassagem['valorPassagem'];
    
 include("mpdf60/mpdf.php");
 
	$html = "
	 <fieldset>
            <table border='1' style='text-align: left; width: 100%;'>
                <tr>
                    <td align='center'> <img src='imagem/seadUfrb.png' width='400' height='212'> </td>
                </tr>
                <tr>
                    <td> <center>Programa: {$nome['nome']} </center></td>
                </tr>
                <tr>
                    <td> Gasto mensal com Bolsa Estagio:{$valorBolsaEstagio['valor']},00 reais</td>
                </tr>
                <tr>
                    <td> Gasto mensal com Bolsa Pesquisa:{$valorBolsaPesquisa['valorPesquisa']},00 reais </td>
                </tr>
                <tr>
                    <td> Valor de diarias ja gasto: {$valorDiaria['valorDiaria']},00 reais </td>
                </tr>
                <tr>
                    <td> Valor de passagens ja gasto: {$valorPassagem['valorPassagem']},00 reais </td>
                </tr>
            </table>

	 </fieldset>";
 
	$mpdf=new mPDF(); 
	$mpdf->SetDisplayMode('fullpage');
	$mpdf->WriteHTML($css,1);
	$mpdf->WriteHTML($html);
	$mpdf->Output();
 
	exit;
?>
<script>
    
    //window.location = "telaPrincipal.php"
    
</script>