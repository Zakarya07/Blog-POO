<?php


class Article{

public function index(){
        
        require_once("libraries/utils.php");
        require_once("models/Article.php");
        require_once("models/User.php");

        $model= new Article();


        /**
         * 2. Récupération des articles
         */
        //ne pas oublier de mettre un espace avant le mot clé "created_at" à cause de la concaténation
        $articles = $model->findAll(" created_at DESC");
        /**
         * 3. Affichage
         */
        $pageTitle = "Accueil";

        renderPage('articles/index', compact('pageTitle', 'articles'));
}

public function show(){
    //Montre un article en particulier
}

public function delete(){
// Supprimer un article
}

}