<?php

$ur1 = "localhost";
$usuario = "root";
$senha = "";
$dbname = "prova";
$porta = "3306";
$conexao = mysqli_connect($ur1, $usuario, $senha, $dbname, $porta);

/*if ($conexao){
  echo "Conexão ok";
  }else{
    echo "Não houve conexão";
}*/