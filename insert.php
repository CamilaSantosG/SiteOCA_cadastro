<?php

/* Criando conexão com o banco de dados */
$servidor = "localhost";
$user = "root";
$password = "root";
$banco = "bd_dados";

$conexao = mysqli_connect($servidor,$user,$password,$banco);


/* Recebendo dados do form */
$nome = $_POST ['nome'];
$endereco = $_POST ['endereco'];
$numero = $_POST ['numero'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];
$cep = $_POST ['cep'];
$numerotel = $_POST ['numerotel'];
$cpf = $_POST ['cpf'];
$rg = $_POST ['rg'];
$gmail = $_POST ['gmail'];


echo "$nome </br>";
echo "$endereco </br>";
echo "$numero </br>";
echo "$bairro </br>";
echo "$cidade </br>";
echo "$estado </br>";
echo "$cep </br>";
echo "$numerotel </br>";
echo "$cpf </br>";
echo "$rg </br>";
echo "$gmail </br>";


$sql = "INSERT INTO bd_dados (cd_cliente, nm_cliente, nm_endereco, nr_endereco, nm_bairro, nm_cidade, nm_estado, nr_CEP, nr_telefone, nr_CPF, nr_RG, nm_email) values (default,'$nome','$endereco','$numero','$bairro','$cidade','$estado','$cep','$numerotel','$cpf','$rg','$gmail')";

$insert = mysqli_query1($conexao,$sql);

?>