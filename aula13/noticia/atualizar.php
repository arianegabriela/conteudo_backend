<?php
require_once "../banco/conexao.php";

$id = $_post['idnoticia']
$titulo = $_POST['titulo'];
$materia = $_POST['materia'];
$categoria = $_POST['categoria'];
$senha = password_hash($_POST["n3"], PASSWORD_BCRYPT);

$sql = "UPDATE `noticia` SET `titulo`=?, `materia`=?, `categoria`=? WHERE  `idnoticia`=?;";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("sssi", $titulo , $materia , $categoria , $id); 

$comando->execute();

header('location: index.php');