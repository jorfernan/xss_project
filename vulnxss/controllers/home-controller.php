<?php
$db = new Database( "./config/config.conf" );

if(isset($_POST['comentario']) && $_POST['comentario'] !== ''){
    try {
        $username = isset($_SESSION['username']) && $_SESSION['username'] !== '' ? $_SESSION['username'] : 'anon';
        if ($db->createComment($username,$_POST['comentario'])) {
            
            $msg = "<p class='text-success mt-2'>Gracias por tu colaboración</p>";
        
        } else {
            $msg = "<p class='text-danger mt-2'>Ha habido un error durante la inserción del comentario, vuelve a intentarlo...</p>";
        }
    } catch (Exception $e) {
        $msg = "<p class='text-danger mt-2'>Ha habido un error durante la inserción del comentario, vuelve a intentarlo...</p>";
    }
}

$comments = $db->getComments();


require './views/home-view.php';