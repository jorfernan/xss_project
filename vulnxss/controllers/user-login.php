<?php

if(isset($_SESSION['logged']) && $_SESSION['logged'] === 1) {
    header('Location: /');
}


if (isset($_POST['logindata']) && count($_POST['logindata']) == 2){
    $db = new Database( "./config/config.conf" );
    #print_r($_POST['userdata']);

    if(detectNonAlphanumeric($_POST['logindata']['name']) === 1 || detectNonAlphanumeric($_POST['logindata']['passwd']) === 1){
        $msg = $msg = "<p class='text-danger'>No se aceptan caráceteres no alfanuméricos</p>";
    }

    else {
        
        $username = removeNonAlphanumeric($_POST['logindata']['name']);
        $password = removeNonAlphanumeric($_POST['logindata']['passwd']);
        
        $msg = "";

        try {
            if ($db->certifyCredentials($username, $password) === true) {
                $_SESSION['logged'] = 1;
                $_SESSION['username'] = $username;
                
                header('Location: /' );
            } else {
                $msg = "<p class='text-danger mt-2'>Ha habido un error, vuelve a intentarlo...</p>";
            }
        } catch (Exception $e) {
            // Manejo de la excepción
            $msg = "<p class='text-danger mt-2'>Ha habido un error, vuelve a intentarlo...</p>";
        }

    } 
    
}


require './views/user-login-view.php';