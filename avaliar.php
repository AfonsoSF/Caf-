<?php
include_once "conexao.php";

	try {
		//Variávis que vão receber os dados
		$nome = filter_var($_POST['nome']);
		$mensagem = filter_var($_POST['mensagem']);
		//inserindo os dados no banco de dados
		$insert = $conectar->prepare("INSERT INTO avaliacao (nome, mensagem) VALUES(:nome, :mensagem)");
		$insert->bindParam(':nome', $nome);
		$insert->bindParam(':mensagem', $mensagem);
		$insert->execute();
		//faz com que depois que vc executar a inserção do banco de dados, o usuário retorna para o index
		header("location: index.php");
	} catch (PDOException $e) {
		echo 'erro'. $e->getMessage();
	}
?>