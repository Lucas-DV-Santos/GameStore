<?php

require_once 'usuarios.php';

$nome = $_POST['nome'];
$data = $_POST['data'];
$email = $_POST['email'];
$escolha = $_POST['escolha'];
$senha = $_POST['senha'];

$novoId = 0;

if($escolha == 'Cadastro'){
    foreach($users as $user){
        if($user[1] == $nome){
            echo "Usuário já existente";
            break;
        }
    }
    if(count($users) > 0){
        $ultimoUser = end($users);
        $novoId = $ultimoUser['id'] + 1;
    }else{
        $novoId = 1;
    }
    
    $usuarioAtivo = [$novoId, $nome, $data, $email, $senha];    
    $users[] = $usuarioAtivo;  
}elseif($escolha == 'Login'){
    foreach($users as $user){
        if($user[3] == $email && $user[4] == $senha){
            header("Location: tela_principal.php");
            exit;
        }
        
    }
    echo "Email ou senha incorretos";
}






?>