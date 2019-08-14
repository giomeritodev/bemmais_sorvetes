<?php

	define("HOST", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DATABASE", "dbgio");

	$conexao = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE) or die("Erro ao conectar com a base de dados");
?>