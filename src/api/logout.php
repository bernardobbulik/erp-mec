<?php


if(PHP_SESSION_ACTIVE){
    session_abort();
}

header('Location: ../../public/views/login.php');
exit();