<?php



$nome = $_POST['nome'];
$data = $_POST['data'];
$email = $_POST['email'];
$escolha = $_POST['escolha'];

$novoId = 0;

if($escolha = 'Cadastro'){
    foreach($users as $user){
        if($user['nome'] = $nome){
            echo "Usuário já existente";
            break;
        }
    }
    if(count($users) > 0){
        $ultimoUser = end($users);
        $novoId = $ultimoUser['id'] + 1;
    }
    
    $usuarioAtivo = [$novoId, $nome, $data, $email];
    $users[] = $usuarioAtivo;
    print_r($usuarioAtivo);
    
    print_r($users);
}  





?>