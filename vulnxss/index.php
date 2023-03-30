<?php
session_start();

require_once 'controllers/Router.php';
require_once 'functions/stringsClean.php';
require_once 'models/db.php';



Route::add("/", function() {
    require './controllers/home-controller.php';
});

Route::add("/acceso", function() {
    require './controllers/user-login.php';
});

Route::add("/registro", function() {
    require './controllers/user-register.php';
});

Route::add("/reflected", function() {
    require './controllers/reflected.php';
});

Route::add("/salir", function() {
    unset($_SESSION);
    session_destroy();
    require './controllers/home-controller.php';
});

Route::dispatch();