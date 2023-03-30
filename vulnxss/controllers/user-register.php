<?php


if (isset($_POST['userdata']) && count($_POST['userdata']) == 2){
    $db = new Database( "./config/config.conf" );
    #print_r($_POST['userdata']);

    if(detectNonAlphanumeric($_POST['userdata']['name']) === 1 || detectNonAlphanumeric($_POST['userdata']['passwd']) === 1){
        $msg = "<p class='text-danger mt-2'>No se aceptan carácteres no alfanuméricos</p>";
    }

    else {

        $username = removeNonAlphanumeric($_POST['userdata']['name']);
        $password = removeNonAlphanumeric($_POST['userdata']['passwd']);
        $msg = "";

        try {
            if ($db->createUser($username, $password) === true) {
                header('Location: /');
            } else {
                $msg = "<p class='text-danger'>Ha habido un error...</p>";
            }
        } catch (Exception $e) {
            // Manejo de la excepción
            $msg = "<p class='text-danger'>Ha habido un error...</p>";
        }

    } 
    
}


require './views/user-register-view.php';