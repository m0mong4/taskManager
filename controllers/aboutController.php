<?php

class aboutController{
    public function about(): void{
        $title= "Q'est ce qu'un routeur";
        $content= "Le routeur est un composant du code qui a
            pour rôle de recevoir toutes les requêtes de l'application et de router chacune
            vers le bon contrôleur";
        require __DIR__ . '/../views/about.php';
    }
}
?>