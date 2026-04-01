<?php

include_once '../../core/db.php';

$response = [];
$erro = '';

// Verificacao
if($loggedIn === true){
    if(empty($erro)){
        try{
            $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = ? AND senha = ?');
            $stmt->execute([$email, $pwr]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        }catch(Exception $e){

        }finally{

        }
    }
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