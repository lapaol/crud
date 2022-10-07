<?php

$nomeServidor = "localhost";
$nomeUsuario  = "root";
$senha        ="";
$nomeBanco    = "empresa";



$conexao = mysqli_connect($nomeServidor, $nomeUsuario, $senha, $nomeBanco);

if($conexao) {
    // echo "ok";
    
} else{
    // echo "falha";
}