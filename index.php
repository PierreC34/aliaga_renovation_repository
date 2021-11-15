<?php
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/FormController.controller.php";

try {
    if (isset($_GET['page'])) {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
    }
    // si GET page est vide on redirige vers l'accueil
    if (empty($url[0])) {
        require "views/accueil.view.php";
        var_dump('url vide = 0');
    } else {
        //switch de GET page pour savoir vers quelle page renvoyer l'utilisateur
        switch ($url[0]) {
            case "accueil":
                require "views/accueil.view.php";
                break;
            case "photo":
                if (empty($url[1])) {
                    require "views/photo.view.php";
                }
                break;
            case "service":
                if (empty($url[1])) {
                    require "views/service.view.php";
                }
                break;
            case "contact":
                if(empty($url[1])){
                    $formController->formCheck();
                }
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    $error = $e->getMessage();
    require 'views/error.view.php';
}
