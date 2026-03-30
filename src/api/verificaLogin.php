<?php

include_once '../core/db.php';

$response = [];
$erro = '';

// Variaveis do POST
$email = $_POST['email'];
$pwr = $_POST['senha'];

$nome = [];
$cdusuario = [];
$loggedIn = false;

// Verificacao
if(empty($email)){
    $erro .= 'E-mail nao pode ser nulo!'; // .= concatena
}else if(empty($pwr)){
    $erro .= 'Senha nao pode ser nula!';
}

if(empty($erro)){
    //n tem erro
    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = ? AND senha = ?');
    $stmt->execute([$email, $pwr]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
        $response = [
            'success' => true,
            'mensagem' => 'Login realizado com sucesso!'
        ];
        $nome = $user['nome'];
        $cdusuario = $user['cdusuario'];
        $loggedIn = true;
    }
    else {
        $response = [
            'success' => false,
            'mensagem' => 'Nenhum usuario encontrado! E-mail ou senha incorretos!'
        ];
        
    }
}
else{
    $response = [
        'success' => false,
        'mensagem' => $erro
    ];
}

echo json_encode($response);