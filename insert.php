<?php
/*Criando conexão com o banco de dados */

$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'bd_dados';

$conexao = mysqli_connect($servidor,$user,$password,$banco);




/*recebendo dados do form*/

$nome = $_POST ['nome'];
$cep = $_POST ['cep'];
$estado= $_POST ['estado'];
$cidade = $_POST ['cidade'];
$bairro = $_POST ['bairro'];
$endereco = $_POST ['endereco'];
$nr_endereco = $_POST ['nr_endereco'];
$rg = $_POST ['rg'];
$cpf = $_POST ['cpf'];
$telefone = $_POST ['telefone'];
$email = $_POST ['email'];

/*Comando para insert into */

$sql = "INSERT INTO tb_cliente (cd, nm_cliente,nm_endereco,nr_endereco,nm_bairro,nm_cidade,sg_estado,cep,nr_telefone,cpf,rg,nm_email,) 
values (default, '$nome','$endereco',$nr_endereco,'$bairro','$cidade','$estado','$cep','$telefone','$cpf','$rg','$email')";

/*Comando para enviar os dados do banco */

$insert = mysqli_query($conexao, $sql);

?>