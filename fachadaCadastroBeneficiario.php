<?php
	
	/** 
		LEMBRAR DE MUDAR OS PARAMETROS DO BANCO DE DADOS, USER E SENHA.
	*/
	/** Confere se foi passado a varialve com id "pav" se existir ele ira adicionar no banco! 
		Caso não existe ele ira redirecionar para a pagina principal!
		
		Aqui anda existe uma mudança a se fazer que e uma forma de retornar para a pagina de casdastro para 
		mostrar uma mensagem de que foi adicionado com sucesso. Deve fazer isso ate hoje de noite
	*/
	
		// incluindo o arquivo do banco de dados
		include ("banco/banco.php");
		// instanciando a classe do banco
		$b = new database();
		// pegando o nome e tirando os espaços no inicio e no fim com a funcao "trim"
		$cpf = trim($_POST["textFieldCpf"]);
                $nome = trim($_POST["textFieldNome"]);
		$email = trim($_POST["textFieldEmail"]);
                $rg = trim($_POST["textFielRg"]);
                $orgaoEmissor = trim($_POST["textFielOrgaoEmissor"]);
                $emitido = trim($_POST["textFieldEmitido"]);
                $estado = trim($_POST["textFieldEstado"]);
                $cidade = trim($_POST["textFieldCidade"]);
                $bairro = trim($_POST["textFieldBairro"]);
                $cep = trim($_POST["textFieldCep"]);
                $endereco = trim($_POST["textFieldEndereco"]);
		
		
		// chamando a função query da classe banco para adicionar ao banco de dados
		$b -> query("INSERT INTO pessoa (cpf),(nome),(email),(rg),(emissor),(emitido),(estado),(cidade),(bairro),(cep),(endereco)"
                        . " VALUES ('$cpf'),('$nome'),('$email'),('$rg'),('$emissor'),('$emitido'),('$estado'),('$cidade'),('$bairro'),('$cep'),('$endereco')");
	
?>