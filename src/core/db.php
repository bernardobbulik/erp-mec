<?php

$userDb = 'bernardo';
$passDb = 'U2pwionq@';

try{
    $conn = new PDO('mysql:host=127.0.0.1;dbname=zoftmec', $userDb, $passDb);
}
catch(Exception $e){
    echo ('ERRO: ' + $e);
}