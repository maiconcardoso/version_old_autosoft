<?php
/* Este arquivo conecta um banco de dados MySQL – Servidor
= localhost*/
$dbname="sistema_erp"; // Indique o nome do banco de dados que
//será aberto
$usuario=""; // Indique o nome do usuário que tem
//acesso
$password=""; // Indique a senha do usuário
//1º passo – Conecta ao servidor MySQL
if(!($id = mysql_connect("localhost",$usuario,$password)))
{
   echo "Não foi possível estabelecer
uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
   exit;
}
//2º passo – Seleciona o Banco de Dados
if(!($con=mysql_select_db($dbname,$id))) {
   echo "Não foi possível estabelecer
uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
   exit;
}
?>