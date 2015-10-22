<?php

include ("banco/banco.php");
$idPrograma = $_POST["programa"];

    //echo $idPrograma;
    $query = "SELECT nome FROM `programa` where idPrograma = $idPrograma";
    $Rnome = Select($query);
    $nome = mysql_fetch_array($Rnome);
    $Nnome = $nome['nome'];
    //echo $nome['nome'];
    
    $query = "SELECT sum((`valorBolsa`+ `valorAuxilioTrasporte`)*`numeroMeses`) as valor,sum(`valorBolsa`+ `valorAuxilioTrasporte`)as mensal FROM `bolsaestagio` where programa_idPrograma = $idPrograma";
    $RvalorBolsaEstagio = Select($query);
    $valorBolsaEstagio = mysql_fetch_array($RvalorBolsaEstagio);
    $NvalorBolsaEstagioTotal = $valorBolsaEstagio['valor'];
    $NvalorBolsaEstagio = $valorBolsaEstagio['mensal'];
    
    $query = "SELECT sum(`valorPesquisa`) as valorPesquisa,sum(`valorPesquisa`*numeroMeses) as total FROM `bolsapesquisa` where programa_idPrograma = $idPrograma";
    $RvalorBolsaPesquisa = Select($query);
    $valorBolsaPesquisa = mysql_fetch_array($RvalorBolsaPesquisa);
    $NvalorBolsaPesquisa = $valorBolsaPesquisa['valorPesquisa'];
    $NvalorBolsaPesquisaTotal = $valorBolsaPesquisa['total'];
    //echo $valorBolsaPesquisa['valorPesquisa'];
    
    $query = "SELECT sum(`valorDiaria`)as valorDiaria FROM `diaria` where programa_idPrograma = $idPrograma";
    $RvalorDiaria = Select($query);
    $valorDiaria = mysql_fetch_array($RvalorDiaria);
    $NvalorDiaria = $valorDiaria['valorDiaria'];
    //echo $valorDiaria['valorDiaria'];
    
    $query = "SELECT sum(`valorPassagem`)as valorPassagem FROM `passagem` where programa_idPrograma = $idPrograma";
    $RvalorPassagem = Select($query);
    $valorPassagem = mysql_fetch_array($RvalorPassagem);
    $NvalorPassagem = $valorPassagem['valorPassagem'];
    //echo $valorPassagem['valorPassagem'];
    
    $query = "SELECT valorTotal FROM `programa` where idPrograma = $idPrograma";
    $Rvalor = Select($query);
    $valorTotal = mysql_fetch_array($Rvalor);
    $NvalorTotal = $valorTotal['valorTotal'];
   
    $valorRestante = $NvalorTotal - $NvalorPassagem - $NvalorDiaria - $NvalorBolsaPesquisa - $NvalorBolsaEstagioTotal;
 include("mpdf60/mpdf.php");
 
	$html = "
	 <fieldset>
            <table border='1' style='text-align: left; width: 100%;'>
                <tr>
                    <td align='center'> <img src='imagem/seadUfrb.png' width='400' height='212'> </td>
                </tr>
                <tr>
                    <td> <center>Programa: {$Nnome} </center></td>
                </tr>
                
                <tr>
                    <td> Valor total para o programa:{$NvalorTotal},00 reais</td>
                </tr>

                <tr>
                    <td> Gasto mensal com Bolsa Estagio:{$NvalorBolsaEstagio},00 reais</td>
                </tr>
                <tr>
                    <td> Gasto total programado com Bolsa Estagio:{$NvalorBolsaEstagioTotal},00 reais</td>
                </tr>
                <tr>
                    <td> Gasto mensal com Bolsa Pesquisa:{$NvalorBolsaPesquisa},00 reais </td>
                </tr>
                <tr>
                    <td> Gasto total programado com Bolsa Pesquisa:{$NvalorBolsaPesquisaTotal},00 reais </td>
                </tr>
                <tr>
                    <td> Valor de diarias ja gasto: {$NvalorDiaria},00 reais </td>
                </tr>
                <tr>
                    <td> Valor de passagens ja gasto: {$NvalorPassagem},00 reais </td>
                </tr>
                <tr>
                    <td> Valor restante do programa: {$valorRestante},00 reais </td>
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