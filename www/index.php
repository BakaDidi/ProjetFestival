<?php

session_start();

require '../includes/flight/flight/Flight.php';
require '../includes/smarty/libs/SmartyBC.class.php';

require '../includes/pdo.php';


//Permet l'accès à la base de données à l'aide du fichier pdo.
$db = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8", "$dbUser", "$dbPassword");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

Flight::set ('PDO', $db);

//Configure les dossier de smarty
Flight::register('view', 'SmartyBC', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';    
});

Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
});

//Si l'utilisateur est connecté alors nous créons une session, elle contiendra les informations de l’utilisateur connecté.
if (isset($_SESSION['utilisateur']))
    Flight::view()->assign ('utilisateur', $_SESSION['utilisateur']);


require "routes.php";

Flight::start();