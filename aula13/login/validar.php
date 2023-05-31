<?php
//importa o arquivo de conexão
require_once "../banco/conexao.php";

if(isset($_POST['login'])and isset($_POST['senha']) ){
    $login = $_POST['login'];
    $senha = $_POST['senha'];

//cria uma variável com o comando SQL
$sql = "SELECT * FROM `usuario` WHERE  `login`= ?;"; 

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($sql);

//diz qual valor vai ser colocado no lugar do ?
$comando->bind_param("s", $login); 

//executa o comando
$comando->execute();

//pegar os resultados da consulta - todas linhas
$resultado = $comando->get_result();

//pega a primeira linha do resultado da consulta
$usuario = $resultado->fetch_object();


if($usuario != null and password_verify($senha , $usuario->senha)){

    session_start();
    $_SESSION['usuario'] = $usuario->nome;
    header("Location: ..//noticia/index.php");

}


}
    header ("Location: formulario.php");



?>
