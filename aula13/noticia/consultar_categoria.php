<?php
require_once "../banco/conexao.php";


//cria uma variavel com o comando SQL
$sql = "SELECT distinct categoria FROM noticia"; 

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($sql);

//executa o comando
$comando->execute();


$resultado = $comando->get_result();

//pega todas linhas do resultado da consulta
$categorias = [];
while ($categoria = $resultado->fetch_object()){
    $categorias[] = $noticia; }
